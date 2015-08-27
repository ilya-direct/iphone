<?php

namespace app\controllers\about;

class AboutController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('/site/about/index');
    }

}
