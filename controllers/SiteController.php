<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionContacts()
    {
        return $this->render('contacts');
    }
    public function actionAjax($param=null)
    {
	    if($param=='feedback' && Yii::$app->request->method==="POST"){
		    $post=Yii::$app->request->post();
		    $msg='<div class="b-message success-message" style="margin:0;">';
		    $flag=Yii::$app->mailer->compose()
			    ->setTo('ilya-direct@ya.ru')
			    ->setFrom(['ilya-direct@yandex.ru' => 'BMSTU сервис'])
			    ->setSubject('Напишите нам')
			    ->setTextBody($post['email'].' : '.$post['name'].' : '.$post['comment'])
			    ->send();
		    /*mail('ilya-direct@ya.ru','Напишите нам',$post['email'].' : '.$post['name'].' : '.$post['comment'])*/
		    if($flag){
			    $msg.='Спасибо! Ваше сообщение успешно отправлено.';
		    }else{
			    $msg.='Извините, произошла ошибка! Попробуйте позже.';
		    }
	        $msg.='</div>';
		    return  $msg;
	    }else{
        return
	        '<div class="title">
	<p class="intro">
		<strong>Оформите заявку</strong><br>
		И получите <strong class="colored">5% скидку</strong> на ремонт.
	</p>
</div>
<div class="centered">
	<form class="b-form iq-service-order service-form" action="/ajax/service-order/" method="post">
		<input type="hidden" name="form-service-order" value="1">
		<div class="right-wrap col-lg-6 col-md-6">
			<div class="input-wrap m-full-width">
				<i class="icon-user"></i>
				<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required>
			</div>
			<div class="input-wrap m-full-width">
				<i class="icon-phone"></i>
				<input class="field-phone" type="tel" placeholder="Телефон (*)" name="phone" data-content="" value="" required>
			</div>
		</div>
		<div class="left-wrap col-lg-6 col-md-6">
			<div class="textarea-wrap">
				<i class="icon-pencil"></i>
				<textarea class="field-comment" placeholder="Опишите проблему" name="comment" data-content=""></textarea>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="submit">
			<input class="btn-submit btn colored" type="submit" value="Отправить">
		</div>
	</form>
</div>';
	    }
    }

	public function actionRemont_planshetov(){

		return $this->render('contacts');
	}
}
