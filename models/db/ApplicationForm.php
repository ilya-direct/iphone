<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "application_form".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property integer $deviceassign_id
 * @property integer $price
 * @property string $service
 * @property string $device
 * @property string $subject
 * @property string $comment
 */
class ApplicationForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'application_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'comment'], 'string'],
            [['deviceassign_id', 'price'], 'integer'],
            [['name'], 'string', 'max' => 6],
            [['email'], 'string', 'max' => 100],
            [['service', 'device', 'subject'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'deviceassign_id' => 'Deviceassign ID',
            'price' => 'Price',
            'service' => 'Service',
            'device' => 'Device',
            'subject' => 'Subject',
            'comment' => 'Comment',
        ];
    }
}
