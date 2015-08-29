<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "device".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $article_id
 * @property string $imagename
 * @property string $alias
 */
class Device extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'device';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'article_id'], 'required'],
            [['description'], 'string'],
            [['article_id'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['imagename'], 'string', 'max' => 100],
            [['alias'], 'string', 'max' => 45],
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
            'description' => 'Description',
            'article_id' => 'Article ID',
            'imagename' => 'Imagename',
            'alias' => 'Alias',
        ];
    }

	public function getDeviceassign()
	{
		return $this->hasMany(Deviceassign::className(), ['device_id' => 'id']);
	}


	public function getArticle()
	{
		return $this->hasOne(Article::className(), ['id' => 'article_id']);
	}
}
