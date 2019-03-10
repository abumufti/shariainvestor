<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_fundamental}}".
 *
 * @property int $id
 * @property string $code
 * @property int $sector_id
 * @property int $subsector_id
 * @property int $quarter
 * @property double $eps
 * @property double $per
 * @property double $pbv
 * @property double $roe
 * @property double $dy
 * @property double $der
 * @property bool $watched
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiFundamental extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_fundamental}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['sector_id', 'subsector_id', 'quarter'], 'integer'],
            [['eps','per', 'pbv', 'roe', 'dy', 'der'], 'number'],
            [['watched', 'is_deleted'], 'boolean'],
            [['date_created', 'date_updated'], 'safe'],
            [['code'], 'string', 'max' => 4],
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
            'code' => 'Code',
            'sector_id' => 'Sector ID',
            'subsector_id' => 'Subsector ID',
            'quarter' => 'Quarter',
            'eps' => 'Eps',
            'per' => 'Per',
            'pbv' => 'Pbv',
            'roe' => 'Roe',
            'dy' => 'Dy',
            'der' => 'Der',
            'watched' => 'Watched',
            'status' => 'Status',
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
        return ['code'];
}
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSector()
    {
        return $this->hasOne(MuvtiSector::className(), ['id' => 'sector_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubsector()
    {
        return $this->hasOne(MuvtiSubsector::className(), ['id' => 'subsector_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmiten()
    {
        return $this->hasOne(MuvtiEmiten::className(), ['code' => 'code']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(MuvtiPeriode::className(), ['id' => 'quarter']);
    }
}
