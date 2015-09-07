<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class OrderForm extends Model
{
    public $name;
    public $phone;
    public $comment;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
	        ['name', 'required', 'message' => 'Заполните имя'],
	        ['phone', 'required', 'message' => 'Заполните телефон'],
	        [['name', 'phone'], 'required'],
        ];
    }


	public function attributeLabels()
	{
		return [
			'name' => 'Имя',
			'phone' => 'Телефон',
			'comment' => 'Описание проблемы'
		];
	}

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
