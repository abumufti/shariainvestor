<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%muvti_user}}".
 *
 * @property int $id
 * @property string $username
 * @property int $role_id
 * @property string $role_name
 * @property string $nik
 * @property string $email
 * @property string $city
 * @property string $province
 * @property string $mobile_number
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $auth_key
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 * @property string $date_updated
 * @property string $date_created
 * @property int $is_active
 * @property int $is_deleted
 */
class MuvtiUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%muvti_user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'role_id', 'role_name'], 'required'],
            [['role_id', 'created_at', 'updated_at', 'status', 'is_active', 'is_deleted'], 'integer'],
            [['date_updated', 'date_created'], 'safe'],
            [['username', 'nik', 'city', 'province', 'mobile_number'], 'string', 'max' => 100],
            [['role_name'], 'string', 'max' => 20],
            [['email', 'password_hash', 'password_reset_token', 'auth_key'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'role_id' => 'Role ID',
            'role_name' => 'Role Name',
            'nik' => 'Nik',
            'email' => 'Email',
            'city' => 'City',
            'province' => 'Province',
            'mobile_number' => 'Mobile Number',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'date_updated' => 'Date Updated',
            'date_created' => 'Date Created',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
