<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $name
 * @property string $smalldesc
 * @property integer $category_id
 * @property integer $pos
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['category_id', 'pos'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['smalldesc'], 'string', 'max' => 255],
            [['name'], 'unique']
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
            'smalldesc' => 'Smalldesc',
            'category_id' => 'Category ID',
            'pos' => 'Pos',
        ];
    }
	/*
	public function getDeviceassign()
	{
		return $this->hasMany(Deviceassign::className(), ['device_id' => 'id']);
	}
	*/
}
