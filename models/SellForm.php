<?php

namespace app\models;

use yii\base\Model;
use Yii;

class SellForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $emiten;
    public $buyFee;
    public $buyid;
    public $sellFee;
    public $buy;
    public $lot;
    public $sell;
    public $date;
    
    public function rules()
    {
        return [
                ['emiten', 'required', 'message' => 'Please choose an emiten.'],
                ['sellFee', 'required', 'message' => 'Please fill Sell Fee.'],
                ['buy', 'required', 'message' => 'Please fill buy value.'],
                ['buyid', 'required'],
                ['date', 'required', 'message' => 'Please fill date.'],
                ['buyFee', 'required'],
                ['lot', 'required','message' => 'Please fill lot value.'],
                ['sell', 'required', 'message' => 'Please fill sell value.'],
        ];
    }
    
     
    public function insert(){
        if ($this->validate()) {
            
            $latest = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->one();
            $code =$this->emiten;
            $buy = floatval(str_replace(",","",$this->buy));
            $sell = floatval(str_replace(",","",$this->sell));
            $share = floatval(str_replace(",","",$this->lot*100));
            $buy_fee = floatval(str_replace(",","",$this->buyFee));
            $sell_fee = floatval(str_replace(",","",$this->sellFee));
            $sell_date = $this->date;
            $margin = floatval(($share*$sell*(1-($sell_fee/100)))-($share*$buy*(1+($buy_fee/100))));
            $sellTotal = floatval(($share*$sell*(1-($sell_fee/100))));
            $balance = floatval($latest['balance']+$sellTotal);
            $status = "Sell $code $share@$sell";
            
            $db = Yii::$app->db;
            $transaction = $db->beginTransaction();
            
            try {
                
                $sql1 = "INSERT INTO muvti_sell (code,buy,buy_id,sell,share,buy_fee,sell_fee,sell_date,margin) VALUES ('$code',$buy,$this->buyid,$sell,$share,$buy_fee,$sell_fee,'$sell_date',$margin)";
                $sql2 = "UPDATE muvti_portofolio SET sell_fee=$sell_fee,share = share - $share WHERE id=$this->buyid ";
                $sql3 = "INSERT INTO muvti_history (history_date,status,debit,credit,balance) VALUES ('$sell_date','$status',0,$sellTotal,$balance)";
                
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