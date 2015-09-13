<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<meta name="description" content="профессиональный ремонт смартфонов, планшетов и ноутбуков в Москве по гарантии и в кратчайшие сроки">
	<base href="http://<?=$_SERVER['HTTP_HOST']?>/">
	<!--[if lt IE 9]>
	<style>.header {background:#fff;height:80px;}.footer .b-widgets {overflow:auto;}</style>
	<script src="/assets/js/html5shiv.js"></script>
	<script src="/assets/js/respond.js"></script>
	<![endif]-->
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="main">
<div class="b-top-bar">
	<div class="container">
		<div class="bs-row">
			<div class="col-sm-3 col-md-4 col-lg-4 hidden-xs hidden-ms">
				<div class="top-bar-text hidden-sm">
					<div class="bmstu-contacts-address">
						г. Москва, м. Бауманкая<br>
						ул. Фридриха Энгельса, д.21
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4">
				<div class="centered">
					<div class="top-bar-phone">
						<div class="phone-mobile hidden-sm hidden-md hidden-lg">
                                    <span class="btn small colored">
                                        <i class="icon-phone"></i> +7 (963) 656-83-77
                                    </span>
						</div>
						<div class="phone-desktop hidden-xs hidden-ms">
							<i class="icon-phone"></i> +7 (963) 656-83-77
						</div>
						<div class="bmstu-contacts-time hidden-xs hidden-ms">
							<i class="icon-time"></i>&nbsp;
							Пн-Пт: 9:00 - 20:00,
							Сб-Вс: 11:00 - 18:00
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-md-4 col-lg-4 hidden-xs hidden-ms">
				<div class="top-bar-social hidden-xs hidden-ms hidden-sm">
					<!--noindex-->
					<a class="vk" href="https://vk.com/" rel="nofollow"><i class="icon-vk"></i></a>
					<a class="fb" href="https://www.facebook.com/" rel="nofollow"><i class="icon-facebook"></i></a>
					<a class="yt" href="http://www.youtube.com/" rel="nofollow"><i class="icon-youtube"></i></a>
					<a class="is" href="https://instagram.com/" rel="nofollow"><i class="icon-instagram"></i></a>
					<!--/noindex-->
				</div>
				<div class="top-bar-buttons">
					<a href="#" class="btn small colored btn-ajax-popup"
					   data-fancybox-href="/ajax/service-order/">Оставить заявку</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="header">
<div class="container">
<div class="mob-container wrap-left">
<!-- Лого -->
<a href="" class="logo text">
	<span><b>BMSTU</b>Сервис</span>
	<small>ремонт портативной техники</small>
</a>
<!-- Кнопка навигации мобильного меню-->
<div class="btn-menu btn-menu-text">Меню<i class="icon-reorder"></i></div>
<!-- Главное меню -->
<?=$this->render('/site/main-menu'); ?>
</div>
</div>
<!-- Главное меню для мобильных устройств -->
<?=$this->render('/site/main-menu-mobile');?>
</div>
<? if(!empty($this->params['navbar']) and $this->params['navbar']): ?>
<div class="b-titlebar<?=empty($this->params['title-alt'])? '' :'-alt';?> clearfix">
	<div class="container">
		<h1 class="text-xs-center"><?=Html::encode($this->title)?></h1>
		<ul class="crumbs text-xs-center">
			<li></li>
			<li><a href="/">Главная</a></li>
			<? $breadcrumbs=empty($this->params['breadcrumbs']) ? [] : $this->params['breadcrumbs'] ;
				foreach($breadcrumbs as $b) echo '<li><a href="'.$b->link.'">'.$b->title.'</a></li>';
			?>
			<li><span><?=Html::encode($this->title)?></span></li>
		</ul>
	</div>
</div>
<? endif; ?>
<?= $content ?>
<footer class="footer">
	<div class="b-widgets">
		<div class="container">
			<div class="bs-row">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<section class="b-widgets-wrap">
						<h3>О нас</h3>
						<ul class="b-list just-links m-dark">
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/kak-my-rabotaem'])?>">Как мы работаем</a></li>
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/vyezd-mastera-i-kurera'])?>">Выезд мастера и курьера</a></li>
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/garantii'])?>">Гарантии</a></li>
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/blog'])?>">Наш блог</a></li>
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/voprosi-i-otveti'])?>">Вопросы и ответы</a></li>
							<li><i class="icon-chevron-right"></i><a href="<?=Url::to(['about/otzivi'])?>">Отзывы</a></li>
						</ul>
						<ul class="b-social m-varicolored margin-10">
							<!--noindex-->
							<li><a class="ya" href="https://old.maps.yandex.ru/" rel="nofollow" target="_blank"><span style="color:#f00">Я</span>ндекс</a></li>
							<li><a class="ya" href="https://www.google.ru/" rel="nofollow" target="_blank">
									<span style="color:#1B49EB">G</span><span style="color:#EA222D">o</span><span style="color:#F8B717">o</span><span style="color:#1B49EB">g</span><span style="color:#07AB1D">l</span><span style="color:#EA222D">e</span>
								</a></li>
							<!--/noindex-->
						</ul>
					</section>
				</div>
				<hr class="dashed hidden-sm hidden-md hidden-lg" style="margin-top: 0px;clear:both;">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<section class="b-widgets-wrap">
						<h3>Контактная информация</h3>
						<?=$this->render('/site/contact-info')?>
					</section>
				</div>
				<hr class="dashed hidden-md hidden-lg" style="margin-top: 0px;clear:both;">
				<div class="col-md-4 col-lg-4">
					<section class="b-widgets-wrap">
						<div class="feedback-form xform" id="form-feedback" data-url="/ajax/feedback/">
							<h3>Напишите нам</h3>
							<?=Html::beginForm('/ajax/feedback/','post',['class'=> "b-form bmstu-feedback-form ajax-form"]); ?>
								<input type="hidden" name="form-feedback" value="1">
								<div class="row bs-row">
									<div class="col-xs-12">
										<div class="input-wrap m-full-width">
											<i class="icon-user"></i>
											<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="input-wrap m-full-width">
											<i class="icon-envelope"></i>
											<input class="field-email" type="email" placeholder="Ваш Email (*)" name="email" data-content="" value="" required>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="textarea-wrap">
											<i class="icon-pencil"></i>
											<textarea class="field-comment" placeholder="Текст сообщения (*)" name="comment" data-content="" required></textarea>
										</div>
									</div>
								</div>
								<input class="btn-submit btn colored" type="submit" value="Отправить">
							<? Html::endForm(); ?>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<div class="b-copyright">
		<div class="container">
			<div class="bs-row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="b-copyright-wrap text-xs-center">
						<span class="copy"> © 2013 <span style="color: #6091E0;">BMSTU</span>Сервис <br></span>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="centered">
						<div class="bottom-bar-phone">
							<div class="phone-mobile hidden-sm hidden-md hidden-lg">
								<a href="tel:8 (495) 532-49-78" class="btn small colored">
									<i class="icon-phone"></i> +7 (963) 656-83-77
								</a>
							</div>
							<div class="phone-desktop hidden-xs hidden-ms">
								<i class="icon-phone"></i> +7 (963) 656-83-77
							</div>
							<div class="bmstu-contacts-time hidden-xs hidden-ms">
								<i class="icon-time"></i>&nbsp;
								Пн-Пт:  9:00 - 20:00,
								Сб-Вс: 11:00 - 18:00
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div class="b-copyright-wrap text-center">
						<!--noindex-->
						<ul class="b-social bot">
							<li><a class="vk" href="https://vk.com/" rel="nofollow"><i class="icon-vk"></i></a></li>
							<li><a class="fb" href="https://www.facebook.com/" rel="nofollow"><i class="icon-facebook"></i></a></li>
							<li><a class="yt" href="http://www.youtube.com/" rel="nofollow"><i class="icon-youtube"></i></a></li>
							<li><a class="is" href="https://instagram.com/" rel="nofollow"><i class="icon-instagram"></i></a></li>
						</ul>
						<!--/noindex-->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
