<?php

namespace app\controllers;

use app\models\db\Device;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
	static $config=
		[
			'remont-planshetov'=>[
				'samsung'=>[
					'Samsung Galaxy Tab A SM-T550',
					'Samsung Galaxy Tab E SM-T560'
				],
				'nexus'=>[
					'nexus-7',
					'Nexus 9'
				],
				'asus','Xiaomi','Sony Tablet','Nokia'
			]


		];
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
        return $this->render('/site/about/index');
    }
    public function actionContacts()
    {
        return $this->render('contacts');
    }
    public function actionAjax($param=null)
    {
	    switch($param){
	        case 'feedback':
			case 'service-order':
			case 'contacts-feedback':
		    if(!Yii::$app->request->method==="POST") return '';
		    $post=Yii::$app->request->post();
		    $topics=[
				    'feedback' => ['subject'=>'Напишите нам',
					    'msg_success'=>'Спасибо! Ваше сообщение успешно отправлено.',
					    'msg_fail'=>'Извините, произошла ошибка! Попробуйте позже.'],
					'service-order' => ['subject'=>'Оформление заявки',
						'msg_success'=>'Спасибо! Ваша заявка успешно отправлена. Администратор свяжется с Вами в самое ближайшее время.',
						'msg_fail'=>'Извините, произошла ошибка! Попробуйте позже или позвоните нам.'],
			        'contacts-feedback' => ['subject'=>'Обратная связь',
				        'msg_success'=>'Спасибо! Ваше сообщение успешно отправлено.',
				        'msg_fail'=>'Извините, на сервере произошла ошибка! Попробуйте позже.']
			];
		    $msg='<div class="b-message success-message" style="margin:0;">';
		    $flag=Yii::$app->mailer->compose()
			    ->setTo('ilya-direct@ya.ru')
			    ->setFrom(['ilya-direct@yandex.ru' => 'BMSTU сервис'])
			    ->setSubject( $topics[$param]['subject'].($param=='contacts-feedback' ? ': '. $post['subject']: ''))
			    ->setTextBody(print_r($post,true))
			    ->send();
		    /*mail('ilya-direct@ya.ru','Напишите нам',$post['email'].' : '.$post['name'].' : '.$post['comment'])*/
		    if($flag){
			    $msg.= $topics[$param]['msg_success'];
		    }else{
			    $msg.= $topics[$param]['msg_fail'];
		    }
		    $msg.='</div>';
		    return  $msg;
		    case 'service-order-form':
			    return $this->renderPartial('service-order-form');
		default: return '';
        }
    }

	public function actionRemont_planshetov(){

		$alias='nexus-7';
		$device=Device::findOne(['alias'=>$alias]);
		$services=$device->deviceassign;
		$services;
		return print_r($services,true);
		return $this->render('device');
	}

	public function actionAkcii(){

		return $this->render('/site/akcii/index');
	}


}
