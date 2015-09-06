<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$this->params['navbar']=false;
$this->title = '404';
?>
<div class="b-titlebar clearfix">
	<div class="container">
		<h1 class="text-xs-center">Страница не найдена</h1>
	</div>
</div>
<div class="content">
	<div class="container">
		<h2 class="centered error-404">404</h2>
		<p class="centered p-20" style="margin-bottom: 25px;">К сожалению, запрашиваемая Вами страница не найдена.</p>
		<p class="centered">
			<? if (!empty($_SERVER['HTTP_REFERER'])): ?>
			<a href="<?=$_SERVER['HTTP_REFERER']?>" class="btn big colored">
				<i class="icon-circle-arrow-left"></i>Назад
			</a>
			<a href="" class="btn big colored">
				На главную
			</a>
			<? else : ?>
			<a href="" class="btn big colored">
				<i class="icon-circle-arrow-left"></i>На главную
			</a>
			<?endif; ?>
		</p>
	</div>
</div>