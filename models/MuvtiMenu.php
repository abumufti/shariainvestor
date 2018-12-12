<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_menu}}".
 *
 * @property int $id
 * @property int $menu_id
 * @property string $menu_name
 * @property string $name
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_menu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_id', 'menu_name', 'name'], 'required'],
            [['menu_id'], 'integer'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['menu_name', 'name'], 'string', 'max' => 100],
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
            'name' => 'Name',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
