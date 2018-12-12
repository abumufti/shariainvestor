<?php

namespace app\models;

use yii\base\Model;
use Yii;

class DividenForm extends Model
{
    public $date;
    public $emiten;
    public $amount;
    
    /**
    * @var UploadedFile
    */
    
    public function rules()
    {
        return [
            ['date', 'required', 'message' => 'Please input Dividen Date.'],
            ['emiten', 'required', 'message' => 'Please input Emiten.'],
            ['amount', 'required', 'message' => 'Please input Amount.']
        ];
    }
    
    public function insert()
    {        
        if ($this->validate()) {
            
            $latest = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->one();
            $date_dividen = $this->date;
            $code = $this->emiten;
            $amount = floatval($this->amount);
            $balance = floatval($latest['balance']) + floatval($this->amount);
            $status = "Dividen $code";
            
            $db = Yii::$app->db;
            $transaction = $db->beginTransaction();
            
            try {
                
                $sql1 = "INSERT INTO muvti_dividen (date_dividen,code,amount) VALUES ('$date_dividen','$code',$amount)";
                $sql2 = "INSERT INTO muvti_history (history_date,status,debit,credit,balance) VALUES ('$date_dividen','$status',0,$amount,$balance)";
                
                $db->createCommand($sql1)->execute();
                $db->createCommand($sql2)->execute();
                
                $transaction->commit();
                
                return true;
                
            } catch(\Exception $e) {
                
                $transaction->rollBack();
                throw $e;
                //return false;
                
            } catch(\Throwable $e) {
                
                $transaction->rollBack();
                throw $e;
                //return false;
            }
            
        } else {
            
            return false;
        }
        
    }
}