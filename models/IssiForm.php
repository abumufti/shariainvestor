<?php

namespace app\models;
use yii\base\Model;
use Yii;

class IssiForm extends Model
{
   
    public $sector;
    public $subsector;
    public $cap;
    public $capFilter;
    public $price;
    public $priceFilter;
    public $eps;
    public $epsFilter;
    public $per;
    public $perFilter;
    public $pbv;
    public $pbvFilter;
    public $roe;
    public $roeFilter;
    public $dy;
    public $dyFilter;
    public $der;
    public $derFilter;
    public $index;
 
    public function rules() {
        return [
            [['sector', 'subsector'], 'integer'],
            [['cap','price', 'eps','per', 'pbv', 'roe', 'dy', 'der'], 'number'],
            [['index','capFilter','priceFilter', 'epsFilter','perFilter', 'pbvFilter', 'roeFilter', 'dyFilter', 'derFilter'], 'string']
        ];
    }
    
    public function getData(){
        
        if (!$this->validate()) { return false; }
            
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();
            
        try {

            $transaction->commit();
                
            return true;
                
        } catch(\Exception $e) {
                
            $transaction->rollBack();
            throw $e;
                
        } catch(\Throwable $e) {
                
            $transaction->rollBack();
            throw $e;
                
        }
        
    }
 
}


