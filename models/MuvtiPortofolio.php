<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_portofolio}}".
 *
 * @property int $id
 * @property string $code
 * @property double $buy
 * @property string $share
 * @property double $buy_fee
 * @property double $sell_fee
 * @property double $target
 * @property double $trend
 * @property string $buy_date
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiPortofolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_portofolio}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'share'], 'required'],
            [['buy', 'buy_fee', 'sell_fee', 'target', 'trend'], 'number'],
            [['share'], 'integer'],
            [['buy_date', 'date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
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
            'buy' => 'Buy',
            'share' => 'Share',
            'buy_fee' => 'Buy Fee',
            'sell_fee' => 'Sell Fee',
            'target' => 'Target',
            'trend' => 'Trend',
            'buy_date' => 'Buy Date',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmiten()
    {
        return $this->hasOne(MuvtiEmiten::className(), ['code' => 'code']);
    }
}
