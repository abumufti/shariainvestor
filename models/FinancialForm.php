<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class FinancialForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $quarter;
    public $emiten;
    public $sector;
    public $subsector;
    public $price;
    public $liability;
    public $equity;
    public $currency;
    public $profit;
    public $dividen;
    public $share;
    public $multiply;
    
    public function rules()
    {
        return [
            ['quarter', 'required', 'message' => 'Please choose quarter.'],
            ['emiten', 'required', 'message' => 'Please choose an emiten.'],
            ['sector', 'required', 'message' => 'Please choose a sector.'],
            ['subsector', 'required', 'message' => 'Please choose a sub sector.'],
            ['liability', 'required', 'message' => 'Please fill liability.'],
            ['equity', 'required', 'message' => 'Please fill equity.'],
            ['currency', 'required', 'message' => 'Please fill currency.'],
            ['profit', 'required', 'message' => 'Please fill profit.'],
            ['dividen', 'required', 'message' => 'Please fill dividen.'],
            ['share', 'required', 'message' => 'Please fill share.'],
            ['multiply','required','message' => 'Please fill multiply.'],

        ];
    }
    
    public function insert(){
        
        if ($this->validate()) {
            
            $emiten = MuvtiEmiten::findOne($this->emiten);
            $fundamental = MuvtiFundamental::find()->where(['id'=>$this->emiten])->one();
            
            $transaction = MuvtiEmiten::getDb()->beginTransaction();
            
            try {
                
                $emiten->quarter = $this->quarter;
                $emiten->sector_id = $this->sector;
                $emiten->subsector_id = $this->subsector;
                $emiten->liability =  floatval($this->multiply*floatval(str_replace(",","",$this->liability)));
                $emiten->equity =  floatval($this->multiply*floatval(str_replace(",","",$this->equity)));
                $emiten->profit =  floatval($this->multiply*floatval(str_replace(",","",$this->profit)));
                $emiten->dividen =  floatval(str_replace(",","",$this->dividen));
                $emiten->currency =  floatval(str_replace(",","",$this->currency));
                $emiten->share =  floatval(str_replace(".","",$this->share));
                $emiten->update();
                
                $fundamental->quarter = $this->quarter;
                $fundamental->sector_id = $this->sector;
                $fundamental->subsector_id = $this->subsector;
                $fundamental->per = $emiten->profit == 0 ? 0 : ($emiten->price/((($emiten->profit*$emiten->currency*$this->multiply($this->quarter))/$emiten->share)));
                $fundamental->pbv = $emiten->price/(($emiten->equity*$emiten->currency)/$emiten->share);
                $fundamental->dy = (($emiten->dividen*$emiten->currency)/$emiten->price)*100;
                $fundamental->der = ($emiten->liability/$emiten->equity);
                $fundamental->roe = (($emiten->profit*$this->multiply($this->quarter))/$emiten->equity)*100;
                
                $fundamental->update();
                
                $transaction->commit();
                
                return true;
                
            } catch(\Exception $e) {
                $transaction->rollBack();
                throw $e;
            } catch(\Throwable $e) {
                $transaction->rollBack();
                throw $e;
            }   
            
            
            
        } else {
            
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
}