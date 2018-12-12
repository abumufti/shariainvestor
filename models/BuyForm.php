<?php

namespace app\models;

use yii\base\Model;
use Yii;


class BuyForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $emiten;
    public $broker;
    public $buyFee;
    public $sellFee;
    public $buy;
    public $dateBuy;
    public $lot;
    public $profitPercentage;
    
    public function rules()
    {
        return [
            ['emiten', 'required', 'message' => 'Please choose an emiten.'],
            ['broker', 'required', 'message' => 'Please choose a broker.'],
            ['buyFee', 'required', 'message' => 'Please fill Buy Fee.'],
            ['sellFee', 'required'],
            ['dateBuy', 'required', 'message' => 'Please fill Buy Fee.'],
            ['buy', 'required', 'message' => 'Please fill Buy value.'],
            ['lot', 'required', 'message' => 'Please fill Lot.'],
            ['profitPercentage', 'required', 'message' => 'Please fill Profit Percentage.'],
        ];
    }
    
     
    public function insert(){
        
        if ($this->validate()) {
            
            $latest = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->one();
            $code = MuvtiEmiten::findOne($this->emiten)->code;
            $buy = floatval(str_replace(",","",$this->buy));
            $share =  floatval(str_replace(",","",$this->lot*100));
            $buy_fee =  floatval(str_replace(",","",$this->buyFee));
            $sell_fee = floatval(str_replace(",","",$this->sellFee));
            $target = floatval(str_replace(",","",$this->profitPercentage));
            $buy_date = $this->dateBuy;
            $buyTotal = floatval(($share*$buy*(1+($buy_fee/100))));
            $balance = floatval($latest['balance']-$buyTotal);
            $status = "Buy $code $share@$buy";
            
            $db = Yii::$app->db;
            $transaction = $db->beginTransaction();
            
            try {
                
                $sql1 = "INSERT INTO muvti_buy (code,buy,share,buy_fee,buy_date) VALUES ('$code',$buy,$share,$buy_fee,'$buy_date')";
                $sql2 = "INSERT muvti_portofolio(code,buy,share,buy_fee,sell_fee,target,buy_date) VALUES ('$code',$buy,$share,$buy_fee,$sell_fee,$target,'$buy_date')";
                $sql3 = "INSERT INTO muvti_history (history_date,status,debit,credit,balance) VALUES ('$buy_date','$status',$buyTotal,0,$balance)";
                
                $db->createCommand($sql1)->execute();
                $db->createCommand($sql2)->execute();
                $db->createCommand($sql3)->execute();
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