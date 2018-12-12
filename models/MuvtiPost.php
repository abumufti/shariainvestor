<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_post}}".
 *
 * @property int $id
 * @property int $menu_id
 * @property string $menu_name
 * @property string $title
 * @property string $body
 * @property string $author
 * @property string $youtube
 * @property string $file
 * @property string $image
 * @property string $date
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiPost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_post}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'menu_name'], 'required'],
            [['menu_id'], 'integer'],
            [['body'], 'string'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['menu_name'], 'string', 'max' => 100],
            [['title', 'youtube', 'image'], 'string', 'max' => 500],
            [['author', 'file', 'date'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'title' => 'Title',
            'body' => 'Body',
            'author' => 'Author',
            'youtube' => 'Youtube',
            'file' => 'File',
            'image' => 'Image',
            'date' => 'Date',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
