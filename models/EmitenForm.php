<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use moonland\phpexcel\Excel;

class EmitenForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $excelFile;
    public $category;
    public $quarter;
    public $currency;
    
    
    public function rules()
    {
        return [
            [['excelFile'], 'file', 'skipOnEmpty' => false],
            ['category', 'required', 'message' => 'Please choose a category.'],
            ['quarter', 'required', 'message' => 'Please choose a quarter.'],
            ['currency', 'required', 'message' => 'Please input currency.'],
        ];
    }
    
    public function upload()
    {        
               
        if ($this->validate()) {
            
            return $this->excelFile->saveAs('uploads/' . $this->excelFile->baseName. '.' . $this->excelFile->extension);
            
        } else {
            
            return false;
        }
    
    }
    
    public function insertFilter(){
        
        switch($this->category){
            
                case 'ISSI':
                    return $this->insertISSI();
                break;
        
                case 'Price':
                    return $this->insertPrice();
                break;
                
                default:
                    return $this->insertIndex();
        }
        
    }
    
    public function insertISSI(){
       
        $data = Excel::import('uploads/' . $this->excelFile->baseName. '.' . $this->excelFile->extension);
        
        $this->backup();
        
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
            
        try {
            
            foreach($data as $index => $value){

                $emiten = new MuvtiEmiten();
                $emiten->code = $value['Stock'];
                $emiten->name = $value['Name'];
                $emiten->save();
                
            }
            
            $transaction->commit();
                
        }catch(\Exception $e) {
               
            $transaction->rollBack();
            throw $e;
                
        }catch(\Throwable $e) {
                
            $transaction->rollBack();
            throw $e;
        }
        
        $this->updateTemp();
        
        return $this->removeFile();
                
    }
    
    public function insertPrice(){
        
        $data = Excel::import('uploads/' . $this->excelFile->baseName. '.' . $this->excelFile->extension);
        
        foreach($data as $index => $value){
            
            $code = $value['Stock'];
            $emiten = MuvtiEmiten::find()->where(['code' =>$code])->one();
              
            if(count($emiten)>0 && intval($value['Last'])>0){
                $emiten->currency = $emiten->currency > 1 ? floatval($this->currency) : $emiten->currency;
                $emiten->update();
                $this->updatePrice($value,$emiten, $code);
            }
        }
        
        return true;
    }
    
    public function insertIndex(){
        
        $data = Excel::import('uploads/' . $this->excelFile->baseName. '.' . $this->excelFile->extension);
        
        if($this->category === 'JII'){MuvtiEmiten::updateAll(['idx' => null]);}
        
        foreach($data as $index => $value){
                              
            $emiten = MuvtiEmiten::find()->where(['code' =>$value['Stock']])->one();
            
            if(count($emiten)){
                
                $emiten->idx = $emiten->idx == null  ? $this->category : $emiten->idx.', '.$this->category;
                
                $emiten->update();
                
            }
            
        }
        
        return true;
    }
    
    public function removeFile()
    {
        
        $target_file = 'uploads/' . $this->excelFile->baseName. '.' . $this->excelFile->extension;

        //Check if folder already exists
        if (file_exists($target_file)) {
            
           return unlink($target_file);
           
        }else{
           
            return false; 
        }
        
    }
    
    private function multiply($quarter){
        
        switch($quarter){
            
            case 1 : return 4; break;
            case 2 : return 2; break;
            case 3 : return 4/3; break;
            default : return 1;
                
        }
        
    }
    
    private function updatePrice($value,$emiten,$code){
        
        $price = floatval($value['Last']);
        $margin = intval($value['Last']) <= 0 ? 0 : floatval(($value['Last']-$value['Prev'])/$value['Last'])*100;
        $eps = $emiten->profit <=0 ? 0 : (($emiten->profit*$emiten->currency*$this->multiply($emiten->quarter))/$emiten->share);
        $per = $emiten->profit <=0 ? 0 : ($emiten->price/((($emiten->profit*$emiten->currency*$this->multiply($emiten->quarter))/$emiten->share)));
        $pbv = $emiten->equity == 0 ? 0 : floatval($price/(($emiten->equity*$emiten->currency)/$emiten->share));
        $dy = $price == 0 ? 0 : floatval((($emiten->dividen*$emiten->currency)/$price)*100);
        $trend = floatval($margin) + floatval($emiten->margin);
        
        $portofolio = MuvtiPortofolio::find()->where(['code' =>$code])->one();
        
        if(count($portofolio) && $margin !=0){
            
            $trend2 = floatval($value['Last']-$portofolio->buy)<0 || floatval($margin) < 0 || floatval($portofolio->trend) < 0  ? floatval($margin) + floatval($portofolio->trend) : 0;
                
            $sql3 = "UPDATE muvti_portofolio SET trend=$trend2  WHERE code='$code'";
            
        }
            
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
            
        try {
                
            $sql1 = "UPDATE muvti_emiten SET price=$price,margin=$margin,trend=$trend  WHERE code='$code'";
            $sql2 = "UPDATE muvti_fundamental SET per=$per,eps=$eps,pbv=$pbv, dy=$dy WHERE code='$code'";
                
            $db->createCommand($sql1)->execute();
            $db->createCommand($sql2)->execute();
            if(count($portofolio) && $margin !=0){$db->createCommand($sql3)->execute();}
            $transaction->commit();
                
        }catch(\Exception $e) {
               
            $transaction->rollBack();
            throw $e;
                
        }catch(\Throwable $e) {
                
            $transaction->rollBack();
            throw $e;
        }
    }
    
    private function backup(){
        
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
            // backup emiten data
            $sql2 ="INSERT INTO muvti_emiten_history (quarter,code,name,sector_id,subsector_id,idx,price,currency,margin,liability,equity,dividen,profit,share,file)
                    SELECT quarter,code,name,sector_id,subsector_id,idx,price,currency,margin,liability,equity,dividen,profit,share,file FROM  muvti_emiten";
            $db->createCommand($sql2)->execute();
        
            // backup emitens' fundamental data
            $sql3 ="INSERT INTO muvti_fundamental_history (code, sector_id, subsector_id, quarter, per, pbv, roe, dy, der,watched)
                    SELECT code, sector_id, subsector_id, quarter, per, pbv, roe, dy, der,watched FROM  muvti_fundamental";
            $db->createCommand($sql3)->execute();
        
            // keep in temporary table
            $sql4 ="INSERT INTO muvti_emiten_temp SELECT * FROM muvti_emiten";
            $db->createCommand($sql4)->execute();
        
            // keep in temporary table
            $sql5 ="INSERT INTO muvti_fundamental_temp SELECT * FROM muvti_fundamental";
            $db->createCommand($sql5)->execute();
        
            $db->createCommand()->truncateTable('muvti_fundamental')->execute();
            $db->createCommand()->truncateTable('muvti_emiten')->execute();
            
            $transaction->commit();
            
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
        
    }
    
    private function updateTemp(){
        
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
        try {
        # insert new emitens data
        $sql1 ="INSERT INTO muvti_fundamental (quarter,code,sector_id,subsector_id)
                SELECT quarter,code,sector_id,subsector_id FROM  muvti_emiten";
        $db->createCommand($sql1)->execute();
        
        # update new emiten data
        $sql2 ="UPDATE muvti_emiten AS e 
                INNER JOIN  muvti_emiten_temp AS et ON  (e.code = et.code)
                SET  e.quarter=et.quarter,e.sector_id=et.sector_id,e.subsector_id=et.subsector_id,e.price=et.price,e.currency=et.currency,e.margin=et.margin,e.liability=et.liability,e.equity=et.equity,e.dividen=et.dividen,e.profit=et.profit,e.share=et.share,e.file=et.file
                ";
        $db->createCommand($sql2)->execute();
        
        # update new emiten fundamental data
        $sql3 ="UPDATE muvti_fundamental AS f 
                INNER JOIN muvti_fundamental_temp AS ef ON  (f.code = ef.code)
                SET f.sector_id=ef.sector_id, f.subsector_id=ef.subsector_id, f.quarter=ef.quarter, f.per=ef.per, f.pbv=ef.pbv, f.roe=ef.roe, f.dy=ef.dy, f.der=ef.der,f.watched=ef.watched
                ";
        $db->createCommand($sql3)->execute();
        
        # drop temporary table
        $db->createCommand()->truncateTable('muvti_emiten_temp')->execute();
        $db->createCommand()->truncateTable('muvti_fundamental_temp')->execute();
        
        $transaction->commit();
            
        } catch (\Exception $e) {
            $transaction->rollBack();
            throw $e;
        } catch (\Throwable $e) {
            $transaction->rollBack();
            throw $e;
        }
        
    }
    
}