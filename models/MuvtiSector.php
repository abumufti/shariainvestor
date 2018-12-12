<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_sector}}".
 *
 * @property int $id
 * @property string $name
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 *
 * @property MuvtiSubsector[] $muvtiSubsectors
 */
class MuvtiSector extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_sector}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['name'], 'string', 'max' => 100],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMuvtiSubsectors()
    {
        return $this->hasMany(MuvtiSubsector::className(), ['sector_id' => 'id']);
    }
}
