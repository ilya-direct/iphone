<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $email
 * @property string $firstname
 * @property string $fulltext
 * @property integer $publish
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname'], 'required'],
            [['fulltext'], 'string'],
            [['date'], 'string'],
            [['publish'], 'integer'],
            [['email', 'firstname'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'firstname' => 'Firstname',
            'fulltext' => 'Fulltext',
            'publish' => 'Publish',
	        'date' => 'Date'
        ];
    }
}
