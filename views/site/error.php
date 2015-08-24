<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
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
			<a href="" class="btn big colored">
				<i class="icon-circle-arrow-left"></i>На главную
			</a>
		</p>
	</div>
</div>