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
use app\models\OrderForm;

class SiteController extends Controller
{
	static $config=
		[
			'remont-apple'=>[
				'type'=>'category1',
				'name'=>'Apple',
				'items'=>[
					'iphone'=>[
						'type'=>'category2',
						'name'=>'Ремонт iPhone',
						'items'=>[
							'6-plus'=>[
								'type'=>'device',
								'name'=>'iPhone 6 Plus',
							],
							'6'=>[
								'type'=>'device',
								'name'=>'iPhone 6',
							],
							'5c'=>[
								'type'=>'device',
								'name'=>'iPhone 5c',
							],
							'5s'=>[
								'type'=>'device',
								'name'=>'iPhone 5s',
							],
							'5'=>[
								'type'=>'device',
								'name'=>'iPhone 5',
							],
							'4'=>[
								'type'=>'device',
								'name'=>'iPhone 4/4S',
							],
							'3'=>[
								'type'=>'device',
								'name'=>'iPhone 3G/3GS',
							]
						]
					],
					'ipad'=>[
						'type'=>'category2',
						'name'=>'Ремонт iPad',
						'items'=>[
							'air-2'=>[
								'type'=>'device',
								'name'=>'iPad Air 2',
							],
							'air'=>[
								'type'=>'device',
								'name'=>'iPad Air',
							],
							'mini-3'=>[
								'type'=>'device',
								'name'=>'iPad mini 3',
							],
							'mini-2'=>[
								'type'=>'device',
								'name'=>'iPad mini 2',
							],
							'mini'=>[
								'type'=>'device',
								'name'=>'iPad mini',
							],
							'4'=>[
								'type'=>'device',
								'name'=>'iPad 4',
							],
							'3'=>[
								'type'=>'device',
								'name'=>'iPad 3',
							],
							'2'=>[
								'type'=>'device',
								'name'=>'iPad 2',
							]
						]
					],
					'macbook'=>[
						'type'=>'category2',
						'name'=>'Ремонт MacBook',
						'items'=>[
							'air'=>[
								'type'=>'device',
								'name'=>'MacBook Air',
							],
							'pro'=>[
								'type'=>'device',
								'name'=>'MacBook Pro',
							],
							'pro-retina-15'=>[
								'type'=>'device',
								'name'=>'MacBook Pro Retina 15"',
							],
							'pro-retina-13'=>[
								'type'=>'device',
								'name'=>'MacBook Pro Retina 13"',
							],
							'pro-retina-12'=>[
								'type'=>'device',
								'name'=>'MacBook Retina 12"',
							],
						],
					],
					'imac'=>[
						'type'=>'category2',
						'name'=>'iMac',
						'items'=>[
							'imac'=>[
								'type'=>'device',
								'name'=>'iMac',
							]
						]
					],
					'apple-watch'=>[
						'type'=>'category2',
						'name'=>'Apple Watch',
						'items'=>[
							'apple-watch'=>[
								'type'=>'device',
								'name'=>'Apple Watch',
							]
						]
					],
				],
			],
			'remont-telefonov'=>[
				'type'=>'category1',
				'title'=>'Ремонт телефонов',
				'article_name'=>'Срочный ремонт телефонов не дорого с гарантией',
				'breadcrumb'=>'Телефоны',
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
						'type'=>'category2',
						'name'=>'Ремонт Nexus',
						'items'=>[
							'6'=>[
								'name'=>'Nexus 6',
								'type'=>'device',
							],
							'5'=>[
								'name'=>'Nexus 5',
								'type'=>'device',
							],
							'4'=>[
								'name'=>'Nexus 4',
								'type'=>'device',
							],
						],
					],
					'meizu'=>[
						'type'=>'category2',
						'title'=>'Ремонт Meizu',
						'name'=>'Meizu',
						'items'=>[
							'mx5'=>[
								'type'=>'device',
								'name'=>'Meizu MX5',
							],
							'm2-note'=>[
								'type'=>'device',
								'name'=>'Meizu M2 Note',
							],
							'mx4-pro'=>[
								'type'=>'device',
								'name'=>'Meizu MX4 Pro',
							],
							'mx4'=>[
								'type'=>'device',
								'name'=>'Meizu MX4',
							],
							'm1-note'=>[
								'type'=>'device',
								'name'=>'Meizu M1 Note',
							],
							'mx3'=>[
								'type'=>'device',
								'name'=>'Meizu MX3',
							],
							'mx2'=>[
								'type'=>'device',
								'name'=>'Meizu MX2',
							],
						],
					],
					'oneplus'=>[
						'type'=>'category2',
						'title'=>'Ремонт телефонов OnePlus',
						'items'=>[
							'2'=>[
								'type'=>'device',
								'name'=>'OnePlus 2',
							],
							'one'=>[
								'type'=>'device',
								'name'=>'OnePlus One',
							],
						]
					],
					'huawei'=>[
						'type'=>'category2',
						'title'=>'Ремонт телефонов Huawei',
						'items'=>[
							'mate-s'=>[
								'type'=>'device',
								'name'=>'Huawei Mate S',
							],
							'g8'=>[
								'type'=>'device',
								'name'=>'Huawei G8',
							],
							'honor-p8'=>[
								'type'=>'device',
								'name'=>'Huawei Honor P8',
							],
							'honor-p8-lite'=>[
								'type'=>'device',
								'name'=>'Huawei Honor P8 Lite',
							],
							'honor-p8-max'=>[
								'type'=>'device',
								'name'=>'Huawei Honor P8 Max',
							],
							'honor-6-plus'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 6 Plus',
							],
							'honor-6'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 6',
							],
							'honor-4x'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 4X',
							],
							'honor-4c'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 4C',
							],
							'honor-3x'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 3X',
							],
							'honor-3c'=>[
								'type'=>'device',
								'name'=>'Huawei Honor 3C',
							],
							'ascend-mate-7'=>[
								'type'=>'device',
								'name'=>'Huawei Ascend Mate 7',
							],
						]
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
			'remont-noutbukov'=>[
				'type'=>'category2',
				'title'=>'Ремонт ноутбуков',
				'breadcrumb'=>'Ноутбуки',
				'article_name'=>'Ремонт ноутбука на дому в Москве? Без проблем!',
				'items'=>[
					'asus'=>[
						'type'=>'device',
						'name'=>'Asus',
						'title'=>'Ремонт ноутбуков Asus',
					],
					'acer'=>[
						'type'=>'device',
						'name'=>'Acer',
						'title'=>'Ремонт ноутбуков Acer',
					],
					'hp'=>[
						'type'=>'device',
						'name'=>'HP',
					],
					'dell'=>[
						'type'=>'device',
						'name'=>'Dell',
						'title'=>'Ремонт ноутбуков Dell',
					],
					'samsung'=>[
						'type'=>'device',
						'name'=>'Samsung',
						'title'=>'Ремонт ноутбуков Samsung',
					],
					'lenovo'=>[
						'type'=>'device',
						'name'=>'Lenovo',
						'title'=>'Ремонт ноутбуков Lenovo',
					],
					'sony'=>[
						'type'=>'device',
						'name'=>'Sony',
						'title'=>'Ремонт ноутбуков Sony',
					],
					'toshiba'=>[
						'type'=>'device',
						'name'=>'Toshiba',
						'title'=>'Ремонт ноутбуков Toshiba',
					],
					'packard-bell'=>[
						'type'=>'device',
						'name'=>'Packard Bell',
						'title'=>'Ремонт ноутбуков Toshiba',
					],
					'zamena-matrici'=>[
						'type'=>'device',
						'name'=>'Matrisa noutbuka',
						'title'=>'Замена матрицы ноутбука',
					],
					'remont-klaviaturi'=>[
						'type'=>'device',
						'name'=>'Klaviatura noutbuka',
						'title'=>'Ремонт клавиатуры ноутбука',
					],

				]

			],
			'akcii'=>[
				'type'=>'link',
				'title'=>'Акции',
				'items'=>[
					'privedi-druga'=>[
						'type'=>'link',
						'title'=>'Приведи друга'
					]
				]
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
			    $breadcrumb->title=empty($urlobj['breadcrumb']) ?
				    (empty($urlobj['title']) ? $urlobj['name'] : $urlobj['title']) :
				    $urlobj['breadcrumb'];
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
	    Yii::$app->view->title = empty($urlobj['title']) ? $urlobj['name'] : $urlobj['title'];
	    Yii::$app->view->params['navbar'] = empty($urlobj['title']) ? true : $urlobj['title'];
	    Yii::$app->view->params['breadcrumbs']= $breadcrumbs;
	    if($urlobj['type']==='device'){
		    return $this->actionDevice($urlobj);
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
			case 'contacts-feedback':
		    if(!Yii::$app->request->method==="POST") return '';
		    $post=Yii::$app->request->post();
		    $topics=[
				    'feedback' => ['subject'=>'Напишите нам',
					    'msg_success'=>'Спасибо! Ваше сообщение успешно отправлено.',
					    'msg_fail'=>'Извините, произошла ошибка! Попробуйте позже.'],
					'service-order' => ['subject'=>'Оформление заявки',
						'msg_success'=>'Спасибо! Ваша заявка успешно отправлена. Менеджер свяжется с Вами в самое ближайшее время.',
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
		    case 'service-order':
				$form=new OrderForm();
				if(yii::$app->request->method=="POST"){
				    $form->load(\Yii::$app->request->post());
				    if ($form->validate()) {
					    $msg='<div class="b-message success-message" style="margin:0;">';
					    $msg.='Спасибо! Ваша заявка успешно отправлена. Менеджер свяжется с Вами в самое ближайшее время.';
					    $msg.='</div>';
					    return $msg;
				    }
				}
			    return $this->renderPartial('service-order-form',['model'=>$form]);
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

	public function actionDevice($urlobj){
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
		$model->device=Device::findOne(['name'=>$urlobj['name']]);
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
		Yii::$app->view->title=empty($urlobj['title']) ? 'Ремонт '.$model->device->name : $urlobj['title'];
		Yii::$app->view->params['title-alt']=true;
		if(empty($model->device->imagename) ){
			$model->device->imagename=mb_strtolower($model->device->name);
			$model->device->imagename=str_replace(' ','-',$model->device->imagename).'.jpg';
		}
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
					$device=$db->createCommand('select * from device where name=:name')->bindValue('name',$item['name'])->queryOne();
					if(!$device) continue;
					$devices[$itemalias]=$device;
					if(empty($devices[$itemalias]['imagename'])){
						$devices[$itemalias]['imagename']=mb_strtolower($devices[$itemalias]['name']);
						$devices[$itemalias]['imagename']=str_replace(' ','-',$devices[$itemalias]['imagename']).'.jpg';
					}
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
				$device=$db->createCommand('select * from device where name=:name')->bindValue('name',$item['name'])->queryOne();
				if(!$device) continue;
				$devices[$itemalias]=$device;
				if(empty($devices[$itemalias]['imagename'])){
					$devices[$itemalias]['imagename']=mb_strtolower($devices[$itemalias]['name']);
					$devices[$itemalias]['imagename']=str_replace(' ','-',$devices[$itemalias]['imagename']).'.jpg';
				}
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
