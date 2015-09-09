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
	public $device_id;
	public $deviceassign_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
	        ['name', 'required', 'message' => 'Заполните имя'],
	        ['phone', 'required', 'message' => 'Заполните телефон'],
	        ['phone', 'validatePhone'],
	        [['name', 'phone'], 'required'],
	        ['comment','trim'],
	        ['device_id','integer'],
	        ['deviceassign_id','integer'],
        ];
    }

	public function validatePhone($attribute)
	{
		$value = $this->$attribute;

		if (!preg_match('/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/',$value)) {
			$this->addError($attribute, "Формат: +7 XXX XXX XX XX");
		}
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
