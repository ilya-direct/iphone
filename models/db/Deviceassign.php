<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "Deviceassign".
 *
 * @property integer $id
 * @property integer $price
 * @property integer $duration
 * @property integer $guaranty
 * @property integer $device_id
 * @property integer $service_id
 * @property string $warning
 */
class Deviceassign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Deviceassign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'duration', 'guaranty', 'device_id', 'service_id'], 'integer'],
            [['device_id', 'service_id'], 'required'],
            [['warning'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'duration' => 'Duration',
            'guaranty' => 'Guaranty',
            'device_id' => 'Device ID',
            'service_id' => 'Service ID',
            'warning' => 'Warning',
        ];
    }

	public function getDevice()
	{
		return $this->hasOne(Device::className(), ['id' => 'device_id']);
	}

	public function getService()
	{
		return $this->hasOne(Service::className(), ['id' => 'service_id']);
	}
}
