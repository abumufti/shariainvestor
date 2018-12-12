<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_sell}}".
 *
 * @property int $id
 * @property string $code
 * @property double $buy
 * @property int $buy_id
 * @property double $sell
 * @property string $share
 * @property double $buy_fee
 * @property double $sell_fee
 * @property string $sell_date
 * @property double $margin
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiSell extends \yii\db\ActiveRecord
{
    public $margins;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_sell}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'buy_id', 'share', 'margin'], 'required'],
            [['buy', 'sell', 'buy_fee', 'sell_fee', 'margin'], 'number'],
            [['buy_id', 'share'], 'integer'],
            [['sell_date', 'date_created', 'date_updated'], 'safe'],
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
            'buy_id' => 'Buy ID',
            'sell' => 'Sell',
            'share' => 'Share',
            'buy_fee' => 'Buy Fee',
            'sell_fee' => 'Sell Fee',
            'sell_date' => 'Sell Date',
            'margin' => 'Margin',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
