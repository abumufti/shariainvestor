<?php

namespace app\models;

use yii\base\Model;

class EmailForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $emailTo;
    public $subject;
    public $body;
    
    
    public function rules()
    {
        return [
            ['emailTo', 'required', 'message' => 'Please fill Email.'],
            ['subject', 'required', 'message' => 'Please fill Subject.'],
            ['body', 'required', 'message' => 'Please fill Body.']
        ];
    }
    
    public function send()
    {        
        if ($this->validate()) {
            
            return true;
            
        } else {
            
            return false;
        }
        
    }
}