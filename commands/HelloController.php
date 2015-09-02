<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
		exec('mysqldump -uroot -proot iphone > c:/wamp/www/iphone/iphone.sql');
    }

	public function actionRestore_db(){
		$path='c:/wamp/www/iphone/iphone.sql';
		/*$h=fopen($path,"w");
		fprintf($h,"no format!");
		fclose($h);*/

		exec('mysql -uroot -proot iphone < '.$path);
//exec('mysql -hmysql.hostinger.ru -uu182420072_root -pqwerty123 u182420072_1 < walletbackup.sql');
	}
}
