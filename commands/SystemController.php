<?php

namespace app\commands;
use yii\console\Controller;
class SystemController extends Controller
{
    public function actionIndex()
    {
		echo 'blank';
    }
	public function actionBack_up()
    {
		exec('mysqldump -uroot -proot iphone > c:/wamp/www/iphone/iphone.sql');
    }

	public function actionRestore_db(){
		$path='c:/wamp/www/iphone/iphone.sql';
		exec('mysql -uroot -proot iphone < '.$path);
	}
}
