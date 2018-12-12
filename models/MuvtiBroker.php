<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_fee}}".
 *
 * @property int $id
 * @property string $broker
 * @property double $buy
 * @property double $sell
 * @property string $date_created
 * @property string $date_updated
 * @property bool $is_deleted
 */
class MuvtiBroker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_broker}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'buy', 'sell'], 'required'],
            [['buy', 'sell'], 'number'],
            [['date_created', 'date_updated'], 'safe'],
            [['is_deleted'], 'boolean'],
            [['broker'], 'string', 'max' => 200],
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
            'buy' => 'Buy',
            'sell' => 'Sell',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
