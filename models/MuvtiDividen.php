<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_dividen}}".
 *
 * @property int $id
 * @property string $code
 * @property double $amount
 * @property string $date_dividen
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiDividen extends \yii\db\ActiveRecord
{
    public $amounts;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_dividen}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'amount', 'date_dividen'], 'required'],
            [['amount'], 'number'],
            [['date_dividen', 'date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['code'], 'string', 'max' => 100],
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
            'amount' => 'Amount',
            'date_dividen' => 'Date Dividen',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
