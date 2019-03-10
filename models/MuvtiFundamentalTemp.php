<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_fundamental_temp}}".
 *
 * @property int $id
 * @property string $code
 * @property int $sector_id
 * @property int $subsector_id
 * @property int $quarter
 * @property double $per
 * @property double $eps
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
class MuvtiFundamentalTemp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_fundamental_temp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sector_id', 'subsector_id', 'quarter'], 'integer'],
            [['code'], 'required'],
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
}
