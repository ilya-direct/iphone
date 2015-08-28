<?php

namespace app\controllers\about;

class BlogController extends \yii\web\Controller
{
	public function actionMenyaem_steklo()
	{
		return $this->render('/site/about/index');
	}

}
