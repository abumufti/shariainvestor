<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_emiten_history}}".
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
 * @property double $liability
 * @property double $equity
 * @property double $dividen
 * @property double $profit
 * @property double $eps
 * @property double $share
 * @property string $status
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiEmitenHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_emiten_history}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quarter', 'code', 'name'], 'required'],
            [['quarter', 'sector_id', 'subsector_id'], 'integer'],
            [['price', 'currency', 'margin', 'liability', 'equity', 'dividen', 'profit', 'eps', 'share'], 'number'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['code'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 100],
            [['idx'], 'string', 'max' => 200],
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
            'liability' => 'Liability',
            'equity' => 'Equity',
            'dividen' => 'Dividen',
            'profit' => 'Profit',
            'eps' => 'Eps',
            'share' => 'Share',
            'status' => 'Status',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
