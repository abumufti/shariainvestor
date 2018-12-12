<?php

namespace app\models;

use yii\base\Model;

class SubSectorForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $sector;
    public $subsector;
    
    
    public function rules()
    {
        return [
            ['sector', 'required', 'message' => 'Please choose sector.'],
            ['subsector', 'required', 'message' => 'Please input sub sector.']
        ];
    }
    
    public function insert()
    {        
        if ($this->validate()) {
            
            $data = new MuvtiSubSector();
            $data->name = $this->subsector;
            $data->sector_id = $this->sector;
            return $data->save();
            
        } else {
            
            return false;
        }
        
    }
}