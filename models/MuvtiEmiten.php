<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_emiten}}".
 *
 * @property int $id
 * @property int $quarter
 * @property string $code
 * @property string $name
 * @property int $sector_id
 * @property int $subsector_id
 * @property string $idx
 * @property double $price
 * @property double $currency
 * @property double $margin
 * @property double $trend
 * @property double $liability
 * @property double $equity
 * @property double $dividen
 * @property double $profit
 * @property double $share
 * @property string $file
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiEmiten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_emiten}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quarter', 'sector_id', 'subsector_id'], 'integer'],
            [['code', 'name'], 'required'],
            [['price', 'currency', 'margin', 'trend', 'liability', 'equity', 'dividen', 'profit', 'share'], 'number'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['code'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 100],
            [['idx'], 'string', 'max' => 200],
            [['file'], 'string', 'max' => 500],
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
            'quarter' => 'Quarter',
            'code' => 'Code',
            'name' => 'Name',
            'sector_id' => 'Sector ID',
            'subsector_id' => 'Subsector ID',
            'idx' => 'Idx',
            'price' => 'Price',
            'currency' => 'Currency',
            'margin' => 'Margin',
            'trend' => 'Trend',
            'liability' => 'Liability',
            'equity' => 'Equity',
            'dividen' => 'Dividen',
            'profit' => 'Profit',
            'share' => 'Share',
            'file' => 'File',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
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
    public function getFundamental()
    {
        return $this->hasOne(MuvtiFundamental::className(), ['code' => 'code']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriode()
    {
        return $this->hasOne(MuvtiPeriode::className(), ['id' => 'quarter']);
    }
}
