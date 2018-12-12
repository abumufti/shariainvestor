<?php

namespace app\models;

use yii\base\Model;
use Yii;    

class DepositForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $date;
    public $status;
    public $amount;
    
    public function rules()
    {
        return [
            ['date', 'required', 'message' => 'Please fill Date.'],
            ['status', 'required', 'message' => 'Please fill Status.'],
            ['amount', 'required', 'message' => 'Please fill Amount.']
        ];
    }
    
    public function insert()
    {        
        
        if ($this->validate()) {
            
            $latest = MuvtiHistory::find()->orderBy(['id' => SORT_DESC])->one();
            $latest2 = MuvtiDeposit::find()->orderBy(['id' => SORT_DESC])->one();
            $latestDeposit = $latest2['balance'] === null ? 0  : $latest2['balance'];
            $latestBalance = $latest['balance'] === null ? 0  : $latest['balance'];
            $deposit_date = $this->date;
            $status = $this->status;
            
            
            if($this->status ==='Save' || $this->status ==='Interest'){ 
            
                $credit = floatval($this->amount);
                $debit=0;
                $balanceHistory = floatval($latestBalance) + floatval($this->amount); 
                $balanceDeposit = floatval($latestDeposit) + floatval($this->amount); 
            
            }else{ 
            
                $debit = floatval($this->amount);
                $credit=0;
                $balanceHistory = floatval($latestBalance) - floatval($this->amount); 
                $balanceDeposit = floatval($latestDeposit) - floatval($this->amount); 
                
            }
            
            $db = Yii::$app->db;
            $transaction = $db->beginTransaction();
            
            try {
                
                $sql1 = "INSERT INTO muvti_deposit (deposit_date,status,credit,debit,balance) VALUES ('$deposit_date','$status',$credit,$debit,$balanceDeposit)";
                $sql2 = "INSERT INTO muvti_history (history_date,status,credit,debit,balance) VALUES ('$deposit_date','$status',$credit,$debit,$balanceHistory)";

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