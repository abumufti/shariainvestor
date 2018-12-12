<?php

namespace app\models;

use yii\base\Model;

class BrokerForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $sellFee;
    public $buyFee;
    public $name;
    
    
    
    public function rules()
    {
        return [
            ['name', 'required', 'message' => 'Please fill Name.'],
            ['sellFee', 'required', 'message' => 'Please fill Sell Fee.'],
            ['buyFee', 'required', 'message' => 'Please fill Buy Fee.']
        ];
    }
    
    public function insert()
    {        
        if ($this->validate()) {
            
            $data = new MuvtiFee();
            $data->name = $this->name;
            $data->buy = $this->buyFee;
            $data->sell = $this->sellFee;
            return $data->save();
            
        } else {
            
            return false;
        }
        
    }
}