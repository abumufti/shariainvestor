<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_subsector}}".
 *
 * @property int $id
 * @property string $name
 * @property int $sector_id
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 *
 * @property MuvtiSector $sector
 */
class MuvtiSubsector extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_subsector}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sector_id'], 'required'],
            [['sector_id'], 'integer'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['name'], 'string', 'max' => 100],
            [['name'], 'unique'],
            [['sector_id'], 'exist', 'skipOnError' => true, 'targetClass' => MuvtiSector::className(), 'targetAttribute' => ['sector_id' => 'id']],
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
            'sector_id' => 'Sector ID',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
     /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSector()
    {
        return $this->hasOne(MuvtiSector::className(), ['id' => 'sector_id']);
    }
}
