<?php

namespace app\models;

use yii\base\Model;
use app\models\MuvtiSector;

class SectorForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $sector;
    
    
    public function rules()
    {
        return [
            ['sector', 'required', 'message' => 'Please input sector.']
        ];
    }
    
    public function insert()
    {        
        if ($this->validate()) {
            
            $data = new MuvtiSector();
            $data->name = $this->sector;
            return $data->save();
            
        } else {
            
            return false;
        }
        
    }
}