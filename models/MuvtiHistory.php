<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_history}}".
 *
 * @property int $id
 * @property string $status
 * @property double $debit
 * @property double $credit
 * @property double $balance
 * @property string $history_date
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_history}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'history_date'], 'required'],
            [['debit', 'credit', 'balance'], 'number'],
            [['history_date', 'date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['status'], 'string', 'max' => 500],
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
            'history_date' => 'History Date',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
    
}
