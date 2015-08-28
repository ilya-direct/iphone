<?php
namespace app\controllers;
use \yii\helpers\Url;

class AkciiController extends \yii\web\Controller
{
	static $breadcrumb_path='<li><a href="/akcii/">Акции</a></li>';
	public function actionIndex()
	{
		return $this->render('/site/akcii/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
	}

	public function actionPrivedi_druga()
	{
		return $this->render('/site/akcii/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
	}
	public function actionViezd_mastera_i_kurera()
	{

	}
}