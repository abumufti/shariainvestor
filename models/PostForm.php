<?php

namespace app\models;

use yii\base\Model;
use Yii;

class PostForm extends Model
{
    public $title;
    public $image;
    public $youtube;
    public $file;
    public $content;

    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['title', 'required', 'message' => 'Please input Title.'],
            ['youtube','string'],
            ['content', 'required', 'message' => 'Please input content.']
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            
            $post = new MuvtiPost();
            $post->title = $this->title;
            $post->author = Yii::$app->user->identity->id;
            $post->youtube = $this->youtube;
            $post->body = $this->content;
            $post->image =  isset($this->image->baseName) ? 'uploads/images/' . $this->image->baseName . '.' . $this->image->extension : '';
            $post->file = isset($this->file->baseName) ?  'uploads/files/' . $this->file->baseName . '.' . $this->file->extension : '';
            $post->save();
            
            
            
            if(isset( $this->image->baseName)){
                $this->image->saveAs('uploads/images/' . $this->image->baseName . '.' . $this->image->extension);
            }
            
            if(isset( $this->file->baseName)){
                $this->file->saveAs('uploads/files/' . $this->file->baseName . '.' . $this->file->extension);
            }
            
            
            
            return true;
        } else {
            return false;
        }
    }
    
}