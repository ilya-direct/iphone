<?php

namespace app\controllers\about\blog;

class BlogController extends \yii\web\Controller
{
	public function actionIndex()
	{
		return $this->render('/site/about/index');
	}

}
