<?php

namespace app\controllers;
use \yii\helpers\Url;

class AboutController extends \yii\web\Controller
{
	static $breadcrumb_path='<li><a href="/about/">О нас</a></li>';
    public function actionIndex()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

	public function actionKak_my_rabotaem()
    {
        return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

	public function actionViezd_mastera_i_kurera()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

	public function actionGarantii()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

	public function actionBlog()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

	public function actionVoprosi_i_otveti()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }


	public function actionOtzivi()
    {
	    return $this->render('/site/about/'.$this->action->id,['breadcrumb'=>self::$breadcrumb_path]);
    }

}
