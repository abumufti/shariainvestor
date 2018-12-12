<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_deposit}}".
 *
 * @property int $id
 * @property string $status
 * @property double $debit
 * @property double $credit
 * @property double $balance
 * @property string $deposit_date
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiDeposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_deposit}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'deposit_date'], 'required'],
            [['debit', 'credit', 'balance'], 'number'],
            [['deposit_date', 'date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
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
            'status' => 'Status',
            'debit' => 'Debit',
            'credit' => 'Credit',
            'balance' => 'Balance',
            'deposit_date' => 'Deposit Date',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
