<?php

namespace app\models;

use yii\base\Model;
use app\models\MuvtiCategory;

class CategoryForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $category;
    public $order;
    
    
    public function rules()
    {
        return [
            ['category', 'required', 'message' => 'Please input category.'],
        ];
    }
    
    public function insert()
    {        
        if ($this->validate()) {
            
            $data = new MuvtiCategory();
            $data->name = $this->category;
            return $data->save();
            
        } else {
            
            return false;
        }
        
    }
}