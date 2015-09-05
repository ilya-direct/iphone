<?php

namespace app\controllers;

use app\models\db\Article;
use app\models\db\Category;
use app\models\db\Device;
use app\models\db\Deviceassign;
use app\models\db\Service;
use app\models\db\ApplicationForm;
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
			'remont-apple'=>[
				'type'=>'category1',
				'title'=>'Ремонт Apple',
			],
			'remont-telefonov'=>[
				'type'=>'category1',
				'title'=>'Ремонт телефонов',
				'article_name'=>'Срочный ремонт телефонов не дорого с гарантией',
				'breadcrumb'=>'Телефоны',
				'category_type'=>2,
				'items'=>[
					'samsung'=>[
						'name'=>'Samsung',
						'type'=>'category2',
						'title'=>'Ремонт Samsung',
						'items'=>[
							'galaxy-alpha'=>[
								'type'=>'device',
								'name'=>'Samsung Galaxy Alpha',
								'title'=>'Samsung Galaxy Alpha',
							],

							'galaxy-a'=>[
								'type'=>'category2',
								'name'=>'Samsung Galaxy A',
								'img'=>'devices/samsung-galaxy-a.jpg',
								'items'=>[
								]
							],
							'galaxy-s'=>[
								'type'=>'category2',
								'name'=>'Samsung Galaxy S',
								'title'=>'Samsung Galaxy S',
								'img'=>'devices/samsung-galaxy-s.jpg',
								'article_name'=>'Ремонт Samsung Galaxy S всего модельного ряда',
								'items'=>[
									's6'=>[
										'type'=>'device',
										'name'=>'Samsung Galaxy S6',
										'title'=>'Samsung Galaxy S6',
										'items'=>[
										]
									]
								]
							],
							'galaxy-note'=>[
								'type'=>'category2',
								'name'=>'Samsung Galaxy Note',
								'img'=>'devices/samsung-galaxy-note.jpg',
								'items'=>[]
							],
						],
					],
					'nexus'=>[
						'name'=>'Nexus',
						'items'=>[],
					],
					'meizu'=>[
						'name'=>'Meizu',
						'items'=>[],
						],
				]
			],
			'remont_planshetov'=>[
				'type'=>'category1',
				'title'=>'Ремонт планшетов',
				'breadcrumb'=>'Планшеты',
				'items'=>[
					'samsung'=>[
						'type'=>'category2',
						'title'=>'Ремонт планшетов Samsung',
						'Samsung Galaxy Tab A SM-T550',
						'Samsung Galaxy Tab E SM-T560'
					],
					'nexus'=>[
						'type'=>'category2',
						'title'=>'Ремонт планшетов Nexus',
						'items'=>[
							'7'=>[
								'type'=>'device',
								'title'=>'Ремонт Nexus 7',
							],
							'Nexus 9'
						]
					],
					'asus','Xiaomi','Sony Tablet','Nokia'
				]
			],
			'remont-noutbukov',
			'akcii'=>[
				'type'=>'link',
				'title'=>'Акции',
				'items'=>[],
			],
			'about'=>[
				'type'=>'link',
				'title'=>'О нас',
				'items'=>[
					'blog'=>[
						'type'=>'link',
						'title'=>'Наш блог'
					],
					'garantii'=>[
						'type'=>'link',
						'title'=>'Гарантии'
					],
					'kak-my-rabotaem'=>[
						'type'=>'link',
						'title'=>'Как мы работаем'
					],
					'otzivi'=>[
						'type'=>'link',
						'title'=>'Отзывы'
					],
					'vyezd-mastera-i-kurera'=>[
						'type'=>'link',
						'title'=>'Выезд мастера и курьера',
					],
					'voprosi-i-otveti'=>[
						'type'=>'link',
						'title'=>'Вопросы и ответы'
					]
				],
			],
			'contacts'=>[
				'type'=>'link',
				'title'=>'Контакты',
				'items'=>[],
			],

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

    public function actionIndex($url){
	    if(empty($url))
		    return $this->render('/site/index');
	    $parts=explode('/',$url);
	    if($parts[0]=='ajax'){
		    array_shift($parts);
		    $url=implode('/',$parts);
		    return $this->actionAjax($url);
	    }
	    $urlobj=self::$config;
	    $max=count($parts)-1;
	    $breadcrumbs=[];
	    $breadcrumb=new \stdClass();
	    $link='/';
	    try {
		    for ($i = 0; $i < $max; ++$i) {
			    $urlobj = $urlobj[$parts[$i]];
			    $link.=$parts[$i].'/';
			    $breadcrumb->link=$link;
			    $breadcrumb->title=empty($urlobj['breadcrumb']) ? $urlobj['title'] : $urlobj['breadcrumb'];
			    $breadcrumbs[]=clone $breadcrumb;
			    $urlobj=$urlobj['items'];
		    }
		    $urlobj = $urlobj[$parts[$i]];
		    /*$link.=$parts[$i].'/';
		    $breadcrumb->link=$link;
		    $breadcrumb->title=empty($urlobj['title']) ? '' : $urlobj['title'];
		    $breadcrumbs[]=clone $breadcrumb;*/
	    }catch (\Exception $e){
		    throw new \yii\web\HttpException(404, 'Page not exists');
	    }
	    Yii::$app->view->title = empty($urlobj['title']) ? '' : $urlobj['title'];
	    Yii::$app->view->params['navbar'] = empty($urlobj['title']) ? true : $urlobj['title'];
	    Yii::$app->view->params['breadcrumbs']= $breadcrumbs;
	    if($urlobj['type']==='device'){
		    return $this->actionDevice($urlobj['name']);
	    }elseif($urlobj['type']==='category1'){
		    return $this->actionCategory1($urlobj,$url);
	    }elseif($urlobj['type']==='category2'){
		    return $this->actionCategory2($urlobj,$url);
	    }
	    $viewpath=isset($urlobj['viewpath']) ? $urlobj['viewpath'] : $url;
        return $this->render('/site/'.$viewpath);
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
		    case 'service-order-item':
		    case 'service-inform-price':
				if(yii::$app->request->method=="POST"){
					$model = new ApplicationForm();
					$model->load([$model->formName()=>Yii::$app->request->post()]);
					$da=Deviceassign::findOne(['id'=>$model->deviceassign_id]);
					$model->service=$da->service->name;
					$model->device=$da->device->name;
					$model->price=$da->price;
					$model->save();
					return 'ок';
				}else{
				    $da=yii::$app->request->get()['deviceassign_id'];
					$da=Deviceassign::findOne(['id'=>$da]);
				    return $this->renderPartial('/site/ajax/'.$param,['service'=>$da->service->name,'device'=>$da->device->name,'da'=>$da->id]);
				}
		    default: return '';
        }
    }

	public function actionDevice($name){
		function correct_values(&$cat){
			foreach($cat as &$service){
				if($service['duration']>=60){
					$service['duration']=floor($service['duration']/60);
					if($service['duration']==1)
						$service['duration']='от '.$service['duration'].' часа';
					else
						$service['duration']='от '.$service['duration'].' часов';
				}else{
					$service['duration']='от '.$service['duration'].' мин.';
				}

				if(is_null($service['guaranty']))
					$service['guaranty']='&minus;';
				else
					$service['guaranty']=$service['guaranty'].' мес.';

				if($service['price']==="0")
					$service['price']='Бесплатно';
				elseif(is_null($service['price']))
					$service['price']='Уточняйте';
				else{
					if( ((int)$service['price']) %10 ===1 ) {
						$suf='от ';
						$service['price']--;
					}else{
						$suf='';
					}
					if(preg_match('/^(\d+)(\d{3})$/u',$service['price'],$matches)){
						$service['price']=$matches[1].' '.$matches[2];
					}
					$service['price']=$suf.$service['price'];
				}
			}
		}
		$db=new \yii\db\Connection(Yii::$app->db);
		$model=new \stdClass();
		$model->device=Device::findOne(['name'=>$name]);
		if(!$model->device)
			throw new \yii\web\HttpException(404, 'Page not exists');

		$model->cat0=$db->createCommand('SELECT da.id as deviceassign_id,s.id,s.name,s.smalldesc,da.warning,da.price,da.duration,da.guaranty FROM service s
			inner join deviceassign da on (da.service_id=s.id)
			inner join device d on (d.id=da.device_id)
		WHERE s.category_id is null AND d.id=:id
		order by s.pos')->bindValue(':id',$model->device->id)->queryAll();
		correct_values($model->cat0);

		$cats=$db->createCommand('
		SELECT DISTINCT c.id,c.name FROM service s
			inner join deviceassign da on (da.service_id=s.id)
			inner join device d on (d.id=da.device_id)
			inner join category c on (c.id=s.category_id)
		WHERE d.id=:id order by s.category_id')->bindValue(':id', $model->device->id)->queryAll();
		$categories=[];
		foreach($cats as $cat){
			$categories[$cat['name']]=$db->createCommand(
				'SELECT da.id as deviceassign_id,s.id,s.name,s.smalldesc,da.warning,da.price,da.duration,da.guaranty FROM service s
			inner join deviceassign da on (da.service_id=s.id)
			inner join device d on (d.id=da.device_id)
		WHERE s.category_id=:cid AND d.id=:id
		order by s.pos')->bindValues([':id'=>$model->device->id,'cid'=>$cat['id']])->queryAll();
		}
		foreach($categories as &$cat){
			correct_values($cat);
		}
		$model->categories=$categories;
		$model->article=Article::findOne(['id'=>$model->device->article_id]);
		Yii::$app->view->title='Ремонт '.$model->device->name;
		$model->device->imagename=empty($model->device->imagename) ? $model->device->alias.'.jpg' : $model->device->imagename;
//		ob_get_clean();
//		var_dump($model);
//		return ob_get_clean();
		return $this->render('device',['model'=>$model]);
	}


	public function actionCategory1($urlobj,$baselink){

		if($urlobj['type']!=='category1')
			throw new \yii\web\HttpException(404, 'Page not exists');

		$db=new \yii\db\Connection(Yii::$app->db);
		$menu=[];
		$menu_item=new \stdClass();
		foreach($urlobj['items'] as $catalias => $category){
			$names[]=$catalias;
			$menu_item->link='/'.$baselink.'/'.$catalias.'/';
			$menu_item->title=$category['name'];
			$menu[$catalias]=clone $menu_item;
			$devices=[];
			foreach($category['items'] as $itemalias => $item){
				if($item['type']=='category2'){
					$devices[$itemalias]['name']=$item['name'];
					$devices[$itemalias]['imagename']=$item['img'];
				}elseif($item['type']=='device'){
					$devices[$itemalias]=$db->createCommand('select * from device where name=:name')->bindValue('name',$item['name'])->queryOne();
					$devices[$itemalias]['imagename']='devices/'.$devices[$itemalias]['imagename'];
				}
				$devices[$itemalias]['link']=$menu_item->link.$itemalias.'/';
			}
			$device_categories[$catalias]=$devices;
		}
		if(!empty($urlobj['article_name'])){
			$text=$db->createCommand('select `fulltext` from category_article where name=:name')->bindValue('name',$urlobj['article_name'])->queryScalar();
		}
		if(empty($text)) $text='';
		return $this->render('/site/category1',['categories'=>$device_categories,'menu'=>$menu,'brands'=>$names,'text'=>$text]);
		//return print_r($device_categories,true);

	}
	public function actionCategory2($urlobj,$baselink){
		if($urlobj['type']!=='category2')
			throw new \yii\web\HttpException(404, 'Page not exists');

		$db=new \yii\db\Connection(Yii::$app->db);
		$menu=[];
		$menu_item=new \stdClass();
		$devices=[];
		foreach($urlobj['items'] as $itemalias => $item){
			if($item['type']=='device'){
				$devices[$itemalias]=$db->createCommand('select * from device where name=:name')->bindValue('name',$item['name'])->queryOne();
				$devices[$itemalias]['imagename']='devices/'.$devices[$itemalias]['imagename'];
			}elseif($item['type']=='category2'){
				$devices[$itemalias]['name']=$item['name'];
				$devices[$itemalias]['imagename']=$item['img'];
			}
			$devices[$itemalias]['link']='/'.$baselink.'/'.$itemalias.'/';
		}
		if(!empty($urlobj['article_name'])){
			$text=$db->createCommand('select `fulltext` from category_article where name=:name')->bindValue('name',$urlobj['article_name'])->queryScalar();
		}
		if(empty($text)) $text='';
		return $this->render('/site/category2',['devices'=>$devices,'text'=>$text]);
	}
}
