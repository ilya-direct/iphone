<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
	<link rel="stylesheet" href="/assets/css/bootstrap.css" type="text/css" />
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
					<div class="iq-contacts-address">
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
                                        <i class="icon-phone"></i> +7 (963) 656-83-79
                                    </span>
						</div>
						<div class="phone-desktop hidden-xs hidden-ms">
							<i class="icon-phone"></i> +7 (963) 656-83-79
						</div>
						<div class="iq-contacts-time hidden-xs hidden-ms">
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
					   data-fancybox-href="/ajax/service-order-form/">Оставить заявку</a>
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
<ul class="menu">
<li class="has-mega">
	<a href="/remont-apple/" data-menu="mega"><i class="icon-apple"></i>Apple</a>
	<ul class="megamenu col-3">
		<li class="m-submenu first col-1">
			<a class="mmenu-title" href="remont-apple/iphone/">Ремонт iPhone</a>
			<a href="remont-apple/iphone/6-plus/">iPhone 6 Plus</a>
			<a href="remont-apple/iphone/6/">iPhone 6</a>
			<a href="remont-apple/iphone/5c/">iPhone 5c</a>
			<a href="remont-apple/iphone/5s/">iPhone 5s</a>
			<a href="remont-apple/iphone/5/">iPhone 5</a>
			<a href="remont-apple/iphone/4/">iPhone 4/4S</a>
			<a href="remont-apple/iphone/3g/">iPhone 3G/3GS</a>
		</li>
		<li class="m-submenu col-2">
			<a class="mmenu-title" href="remont-apple/ipad/">Ремонт iPad</a>
			<a href="remont-apple/ipad/air-2/">iPad Air 2</a>
			<a href="remont-apple/ipad/air/">iPad Air</a>
			<a href="remont-apple/ipad/mini-3/">iPad mini 3</a>
			<a href="remont-apple/ipad/mini-2/">iPad mini 2</a>
			<a href="remont-apple/ipad/mini/">iPad mini</a>
			<a href="remont-apple/ipad/4/">iPad 4</a>
			<a href="remont-apple/ipad/3/">iPad 3</a>
			<a href="remont-apple/ipad/2/">iPad 2</a>
		</li>
		<li class="m-submenu col-3">
			<a class="mmenu-title" href="remont-apple/macbook/">Ремонт MacBook</a>
			<a href="remont-apple/macbook/air/">MacBook Air</a>
			<a href="remont-apple/macbook/pro/">MacBook Pro</a>
			<a href="remont-apple/macbook/pro-retina-15/">MacBook Pro Retina 15"</a>
			<a href="remont-apple/macbook/pro-retina/">MacBook Pro Retina 13"</a>
			<a href="remont-apple/macbook/retina-12/">MacBook Retina 12"</a>
			<a class="mmenu-title" href="remont-apple/imac/">Ремонт iMac</a>
			<a class="mmenu-title" href="remont-apple/remont-apple-watch/">Ремонт Apple Watch</a>
		</li>
	</ul>
</li>
<li class="has-mega">
	<a href="/remont-telefonov/" >Телефоны</a>
	<ul class="megamenu col-4">
		<li class="m-submenu first col-1">
			<a class="mmenu-title" href="remont-telefonov/samsung/">Ремонт Samsung</a>
			<a href="remont-telefonov/samsung/galaxy-alpha/">Samsung Galaxy Alpha</a>
			<a href="remont-telefonov/samsung/galaxy-a/">Samsung Galaxy A</a>
			<a href="remont-telefonov/samsung/galaxy-s/">Samsung Galaxy S</a>
			<a href="remont-telefonov/samsung/galaxy-note/">Samsung Galaxy Note</a>
			<a class="mmenu-title" href="remont-telefonov/nexus/">Ремонт Nexus</a>
			<a href="remont-telefonov/nexus/6/">Nexus 6</a>
			<a href="remont-telefonov/nexus/5/">Nexus 5</a>
			<a href="remont-telefonov/nexus/4/">Nexus 4</a>
		</li>
		<li class="m-submenu col-2">
			<a class="mmenu-title" href="remont-telefonov/meizu/">Ремонт Meizu</a>
			<a href="remont-telefonov/meizu/remont-meizu-mx5/">Meizu MX5</a>
			<a href="remont-telefonov/meizu/m2-note/">Meizu M2 Note</a>
			<a href="remont-telefonov/meizu/mx4-pro/">Meizu MX4 Pro</a>
			<a href="remont-telefonov/meizu/mx4/">Meizu MX4</a>
			<a href="remont-telefonov/meizu/m1-note/">Meizu M1 Note</a>
			<a href="remont-telefonov/meizu/mx3/">Meizu MX3</a>
			<a href="remont-telefonov/meizu/mx2/">Meizu MX2</a>
			<a class="mmenu-title" href="remont-telefonov/oneplus/">Ремонт OnePlus</a>
			<a href="remont-telefonov/oneplus/remont-oneplus-2/">OnePlus 2</a>
			<a href="remont-telefonov/oneplus/one/">OnePlus One</a>
		</li>
		<li class="m-submenu col-3">
			<a class="mmenu-title" href="remont-telefonov/huawei/">Ремонт Huawei</a>
			<a href="remont-telefonov/huawei/remont-huawei-g8/">Huawei G8</a>
			<a href="remont-telefonov/huawei/p8/">Huawei Honor P8</a>
			<a href="remont-telefonov/huawei/p8-lite/">Huawei Honor P8 Lite</a>
			<a href="remont-telefonov/huawei/p8-max/">Huawei Honor P8 Max</a>
			<a href="remont-telefonov/huawei/honor-6-plus/">Huawei Honor 6 Plus</a>
			<a href="remont-telefonov/huawei/honor-6/">Huawei Honor 6</a>
			<a href="remont-telefonov/huawei/honor-4x/">Huawei Honor 4X</a>
			<a href="remont-telefonov/huawei/honor-4c/">Huawei Honor 4C</a>
			<a href="remont-telefonov/huawei/honor-3x/">Huawei Honor 3X</a>
			<a href="remont-telefonov/huawei/honor-3c/">Huawei Honor 3C</a>
			<a href="remont-telefonov/huawei/ascend-mate7/">Huawei Ascend Mate 7</a>
		</li>
		<li class="m-submenu col-4">
			<a class="mmenu-title" href="remont-telefonov/sony/">Ремонт Sony Xperia</a>
			<a href="remont-telefonov/sony/xperia-z4/">Sony Xperia Z4</a>
			<a href="remont-telefonov/sony/xperia-z3/">Sony Xperia Z3</a>
			<a href="remont-telefonov/sony/xperia-z3-compact/">Sony Xperia Z3 Compact</a>
			<a href="remont-telefonov/sony/xperia-z2/">Sony Xperia Z2</a>
			<a href="remont-telefonov/sony/xperia-z1/">Sony Xperia Z1</a>
			<a href="remont-telefonov/sony/xperia-z1-compact/">Sony Xperia Z1 Compact</a>
			<a href="remont-telefonov/sony/xperia-z-ultra/">Sony Xperia Z Ultra</a>
			<a href="remont-telefonov/sony/xperia-z-l36/">Sony Xperia Z</a>
			<a href="remont-telefonov/sony/xperia-c3/">Sony Xperia C3</a>
			<a href="remont-telefonov/sony/xperia-t3/">Sony Xperia T3</a>
			<a href="remont-telefonov/sony/xperia-e3/">Sony Xperia E3</a>
		</li>
		<li class="megamenu-caption">
			<!--noindex-->
			<a rel="nofollow" href="remont-telefonov/" class="btn small colored">Смотреть все</a>
			<!--/noindex-->
		</li>
	</ul>
</li>
<li class="has-mega">
	<a href="/remont_planshetov/" >Планшеты</a>
	<ul class="megamenu col-3">
		<li class="m-submenu first col-1">
			<a class="mmenu-title" href="remont_planshetov/samsung/">Ремонт Samsung</a>
			<a href="remont_planshetov/samsung/samsung-galaxy-tab-a-sm-t550/">Samsung Galaxy Tab A SM-T550</a>
			<a href="remont_planshetov/samsung/remont-samsung-galaxy-tab-e-sm-t560/">Samsung Galaxy Tab E SM-T560</a>
			<a href="remont_planshetov/samsung/remont-samsung-galaxy-tab-a-sm-t355/">Samsung Galaxy Tab A SM-T355</a>
			<a href="remont_planshetov/samsung/galaxy-tab-4-70-sm-t230/">Samsung Galaxy Tab 4 7.0" SM-T230</a>
			<a href="remont_planshetov/samsung/galaxy-tab-4-10-1-sm-t530/">Samsung Galaxy Tab 4 10.1" SM-T530</a>
			<a href="remont_planshetov/samsung/galaxy-tab-s-10-5-sm-t800/">Samsung Galaxy Tab S 10.5" SM-T800</a>
			<a href="remont_planshetov/samsung/galaxy-tab-s-84-sm-t700/">Samsung Galaxy Tab S 8.4" SM-T700</a>
			<a href="remont_planshetov/samsung/galaxy-note-gt-n8000/">Samsung Galaxy Note 10.1" GT-N8000</a>
			<a href="remont_planshetov/samsung/galaxy-note-101-p6050/">Samsung Galaxy Note 10.1" SM-P6050</a>
			<a href="remont_planshetov/samsung/galaxy-note-pro-122-sm-p905/">Samsung Galaxy Note Pro 12.2" SM-P905</a>
			<a href="remont_planshetov/samsung/galaxy-note-80-gt-n5100/">Samsung Galaxy Note 8.0" GT-N5100</a>
		</li>
		<li class="m-submenu col-2">
			<a class="mmenu-title" href="remont_planshetov/nexus/">Ремонт Nexus</a>
			<a href="remont_planshetov/nexus/7/">Nexus 7</a>
			<a href="remont_planshetov/nexus/9/">Nexus 9</a>
			<a class="mmenu-title" href="remont_planshetov/xiaomi/">Ремонт Xiaomi</a>
			<a href="remont_planshetov/xiaomi/mi-pad/">Xiaomi Mi Pad</a>
			<a class="mmenu-title" href="remont_planshetov/sony/">Ремонт Sony Tablet</a>
			<a href="remont_planshetov/sony/xperia-z4-tablet/">Sony Xperia Z4 Tablet</a>
			<a href="remont_planshetov/sony/xperia-z3-tablet-compact/">Sony Xperia Z3 Compact Tablet</a>
			<a href="remont_planshetov/sony/xperia-tablet-z2/">Sony Xperia Z2 Tablet</a>
			<a href="remont_planshetov/sony/xperia-tablet-z/">Sony Xperia Z Tablet</a>
			<a href="remont_planshetov/sony/xperia-tablet-s/">Sony Xperia Tablet S</a>
		</li>
		<li class="m-submenu col-3">
			<a class="mmenu-title" href="remont_planshetov/asus/">Ремонт Asus</a>
			<a href="remont_planshetov/asus/fonepad-7/">Asus Fonepad 7</a>
			<a href="remont_planshetov/asus/transformer-pad-tf103c/">Asus Transformer Pad (TF103C)</a>
			<a href="remont_planshetov/asus/transformer-pad-tf701t/">ASUS Transformer Pad (TF701T)</a>
			<a href="remont_planshetov/asus/memo-pad-hd-8-me180a/">Asus MeMO Pad HD 8 (ME180A)</a>
			<a class="mmenu-title" href="remont_planshetov/nokia/">Ремонт Nokia</a>
			<a href="remont_planshetov/nokia/lumia-2520/">Nokia Lumia 2520</a>
			<a href="remont_planshetov/nokia/n1/">Nokia N1</a>
		</li>
		<li class="megamenu-caption">
			<!--noindex-->
			<a rel="nofollow" href="remont_planshetov/" class="btn small colored">Смотреть все</a>
			<!--/noindex-->
		</li>
	</ul>
</li>
<li>
	<a href="/remont-noutbukov/" >Ноутбуки</a>
	<ul class="submenu">
		<li>
			<a href="/remont-noutbukov/asus/" >Asus</a>
		</li>
		<li>
			<a href="/remont-noutbukov/acer/" >Acer</a>
		</li>
		<li>
			<a href="/remont-noutbukov/hp/" >HP</a>
		</li>
		<li>
			<a href="/remont-noutbukov/dell/" >Dell</a>
		</li>
		<li>
			<a href="/remont-noutbukov/samsung/" >Samsung</a>
		</li>
		<li>
			<a href="/remont-noutbukov/lenovo/" >Lenovo</a>
		</li>
		<li>
			<a href="/remont-noutbukov/sony/" >Sony</a>
		</li>
		<li>
			<a href="/remont-noutbukov/toshiba/" >Toshiba</a>
		</li>
		<li>
			<a href="/remont-noutbukov/packard-bell/" >Packard Bell</a>
		</li>
		<li>
			<a href="/remont-noutbukov/zamena-matriczyi/" >Замена матрицы ноутбука</a>
		</li>
		<li>
			<a href="/remont-noutbukov/remont-klaviaturyi/" >Ремонт клавиатуры ноутбука</a>
		</li>
	</ul>
</li>
<li>
	<a href="/akczii/" >Акции</a>
</li>
<li>
	<a href="/about/" >О нас</a>
	<ul class="submenu">
		<li>
			<a href="/about/kak-myi-rabotaem/" >Как мы работаем</a>
		</li>
		<li>
			<a href="/about/vyiezd-mastera-i-kurera/" >Выезд мастера и курьера</a>
		</li>
		<li>
			<a href="/about/garantii/" >Гарантии</a>
		</li>
		<li>
			<a href="/about/blog/" >Наш блог</a>
		</li>
		<li>
			<a href="/about/voprosyi-i-otvetyi/" >Вопросы и ответы</a>
		</li>
		<li>
			<a href="/about/otzyivyi/" >Отзывы</a>
		</li>
	</ul>
</li>
<li>
	<a href="/contacts/" >Контакты</a>
</li>
</ul>
</div>
</div>
<!-- Главное меню для мобильных устройств -->
<ul class="mob-menu">
<li>
	<div>
		<a href="/remont-apple/"><i class="icon-apple"></i> Apple</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-apple/iphone/">Ремонт iPhone</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-apple/iphone/6-plus/">iPhone 6 Plus</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/6/">iPhone 6</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/5c/">iPhone 5c</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/5s/">iPhone 5s</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/5/">iPhone 5</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/4/">iPhone 4/4S</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/iphone/3g/">iPhone 3G/3GS</a>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<div>
				<a href="/remont-apple/ipad/">Ремонт iPad</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-apple/ipad/air-2/">iPad Air 2</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/air/">iPad Air</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/mini-3/">iPad mini 3</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/mini-2/">iPad mini 2</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/mini/">iPad mini</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/4/">iPad 4</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/3/">iPad 3</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/ipad/2/">iPad 2</a>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<div>
				<a href="/remont-apple/macbook/">Ремонт MacBook</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-apple/macbook/air/">MacBook Air</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/macbook/pro/">MacBook Pro</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/macbook/pro-retina-15/">MacBook Pro Retina 15"</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/macbook/pro-retina/">MacBook Pro Retina 13"</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-apple/macbook/retina-12/">MacBook Retina 12"</a>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<div>
				<a href="/remont-apple/imac/">Ремонт iMac</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-apple/remont-apple-watch/">Ремонт Apple Watch</a>
			</div>
		</li>
	</ul>
</li>
<li>
<div>
	<a href="/remont-telefonov/">Телефоны</a>
	<span class="btn-submenu"></span>                </div>
<ul class="mob-submenu">
<li>
	<div>
		<a href="/remont-telefonov/samsung/">Ремонт Samsung</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/samsung/galaxy-alpha/">Samsung Galaxy Alpha</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/samsung/galaxy-a/">Samsung Galaxy A</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-a/a7/">Samsung Galaxy A7</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-a/a5/">Samsung Galaxy A5</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-a/a3/">Samsung Galaxy A3</a>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/samsung/galaxy-s/">Samsung Galaxy S</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s6-edge/">Samsung Galaxy S6 EDGE</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s6/">Samsung Galaxy S6</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s5/">Samsung Galaxy S5</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s4/">Samsung Galaxy S4</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s3/">Samsung Galaxy S3</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-s/s2/">Samsung Galaxy S2</a>
					</div>
				</li>
			</ul>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/samsung/galaxy-note/">Samsung Galaxy Note</a>
				<span class="btn-submenu"></span>                </div>
			<ul class="mob-submenu">
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-note/remont-samsung-galaxy-note-5/">Samsung Galaxy Note 5</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-note/4/">Samsung Galaxy Note 4</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-note/3/">Samsung Galaxy Note 3</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-note/2/">Samsung Galaxy Note 2</a>
					</div>
				</li>
				<li>
					<div>
						<a href="/remont-telefonov/samsung/galaxy-note/remont-samsung-galaxy-note-edge/">Samsung Galaxy Note Edge</a>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/nexus/">Ремонт Nexus</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/nexus/6/">Nexus 6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nexus/5/">Nexus 5</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nexus/4/">Nexus 4</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/meizu/">Ремонт Meizu</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/meizu/remont-meizu-mx5/">Meizu MX5</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/m2-note/">Meizu M2 Note</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/mx4-pro/">Meizu MX4 Pro</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/mx4/">Meizu MX4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/m1-note/">Meizu M1 Note</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/mx3/">Meizu MX3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/meizu/mx2/">Meizu MX2</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/oneplus/">Ремонт OnePlus</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/oneplus/remont-oneplus-2/">OnePlus 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oneplus/one/">OnePlus One</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/huawei/">Ремонт Huawei</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/huawei/remont-huawei-g8/">Huawei G8</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/p8/">Huawei Honor P8</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/p8-lite/">Huawei Honor P8 Lite</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/p8-max/">Huawei Honor P8 Max</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-6-plus/">Huawei Honor 6 Plus</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-6/">Huawei Honor 6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-4x/">Huawei Honor 4X</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-4c/">Huawei Honor 4C</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-3x/">Huawei Honor 3X</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/honor-3c/">Huawei Honor 3C</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-mate7/">Huawei Ascend Mate 7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-p7/">Huawei Ascend P7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-p6/">Huawei Ascend P6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-g7/">Huawei Ascend G7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-g6/">Huawei Ascend G6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-y530/">Huawei Ascend Y530</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-mate/">Huawei Ascend Mate</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-d2/">Huawei Ascend D2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-p2/">Huawei Ascend P2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/huawei/ascend-p1/">Huawei Ascend P1</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/sony/">Ремонт Sony Xperia</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z4/">Sony Xperia Z4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z3/">Sony Xperia Z3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z3-compact/">Sony Xperia Z3 Compact</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z2/">Sony Xperia Z2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z1/">Sony Xperia Z1</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z1-compact/">Sony Xperia Z1 Compact</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z-ultra/">Sony Xperia Z Ultra</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-z-l36/">Sony Xperia Z</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-c3/">Sony Xperia C3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-t3/">Sony Xperia T3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-e3/">Sony Xperia E3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-e4/">Sony Xperia E4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/sony/xperia-m4-aqua/">Sony Xperia M4 Aqua</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/lg/">Ремонт LG</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/lg/g4/">LG G4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/remont-lg-g4s/">LG G4s</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g3/">LG G3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g3s/">LG G3S</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g2/">LG G2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g-flex/">LG G Flex</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/optimus-g/">LG Optimus G</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/optimus-g-pro/">LG Optimus G Pro</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g2-mini/">LG G2 Mini</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g-flex-2/">LG G Flex 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g-pro-2/">LG G Pro 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lg/g3-mini/">LG G3 Mini</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/lenovo/">Ремонт Lenovo</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/p90/">Lenovo P90</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/p70/">Lenovo P70</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s90/">Lenovo S90</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s60/">Lenovo S60</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/vibe-z2-pro/">Lenovo Vibe Z2 Pro</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/vibe-z2/">Lenovo Vibe Z2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/vibe-x2/">Lenovo Vibe X2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/vibe-x/">Lenovo Vibe X</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/k900/">Lenovo K900</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/vibe-z/">Lenovo Vibe Z</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s820/">Lenovo S820</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s720/">Lenovo S870</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s920/">Lenovo S920</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s860/">Lenovo S860</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/s930/">Lenovo S930</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/p780/">Lenovo P780</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/lenovo/remont-lenovo-s850/">Lenovo S850</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/htc/">Ремонт HTC</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-m9/">Ремонт HTC One M9</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-m8/">Ремонт HTC One M8</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-mini-2/">Ремонт HTC One mini 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-m7/">Ремонт HTC One M7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-eye/">Ремонт HTC Desire EYE</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-700/">Ремонт HTC Desire 700</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-600/">Ремонт HTC Desire 600</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-500/">Ремонт HTC Desire 500</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-300/">Ремонт HTC Desire 300</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-816/">Ремонт HTC Desire 816</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-820/">Ремонт HTC Desire 820</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/desire-x/">Ремонт HTC Desire X</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/butterfly/">Ремонт HTC Butterfly</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/butterfly-2/">Ремонт HTC Butterfly 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-x/">Ремонт HTC One X </a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/htc/one-s/">Ремонт HTC One S</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/oppo/">Ремонт OPPO</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/oppo/r5/">OPPO R5</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/r7/">OPPO R7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/r7-plus/">OPPO R7 Plus</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/find-7/">OPPO Find 7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/n3/">OPPO N3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/find-5/">OPPO Find 5</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/oppo/n1/">OPPO N1</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/nokia-lumia/">Ремонт Nokia Lumia</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-640-xl/">Microsoft Lumia 640 XL</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-640/">Microsoft Lumia 640</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-540/">Microsoft Lumia 540</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-535/">Microsoft Lumia 535</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-435/">Microsoft Lumia 435</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-532/">Microsoft Lumia 532</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/microsoft-lumia-430/">Microsoft Lumia 430</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-930/">Nokia Lumia 930</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-830/">Nokia Lumia 830</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-730/">Nokia Lumia 730</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-735/">Nokia Lumia 735</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-630-ds/">Nokia Lumia 630 DS</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-635/">Nokia Lumia 635</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-530/">Nokia Lumia 530</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-625/">Nokia Lumia 625</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-1520/">Nokia Lumia 1520</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-1020/">Nokia Lumia 1020</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-1320/">Nokia Lumia 1320</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/nokia-lumia/lumia-525/">Nokia Lumia 525</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/asus/">Ремонт Asus Zenfone</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/asus/zenfone-6/">Asus ZenFone 6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/asus/zenfone-5/">Asus ZenFone 5</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/asus/zenfone-4/">Asus ZenFone 4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/asus/zenfone-2/">Asus ZenFone 2</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/zte/">Ремонт ZTE</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/zte/blade-s6/">ZTE Blade S6</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/grand-s2/">ZTE Grand S2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/star-1/">ZTE Star 1</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/remont-zte-nubia-z9-max/">ZTE Nubia Z9 Max</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/remont-zte-nubia-z9-mini/">ZTE Nubia Z9 Mini</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/nubia-z5s-mini/">ZTE Nubia Z5S mini</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/remont-zte-nubia-z7-max/">ZTE Nubia Z7 Max</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/remont-zte-nubia-z7-mini/">ZTE Nubia Z7 Mini</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/blade-hn/">ZTE Blade HN</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/zte/geek-2-pro/">Geek 2 Pro</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/highscreen/">Ремонт HighScreen</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/pure-f/">Highscreen Pure F</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/verge/">Highscreen Verge</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/zera-u/">Highscreen Zera U</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/spade/">Highscreen Spade</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/zera-s-power/">Highscreen Zera S Power</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/boost-2-se/">Highscreen Boost 2 SE</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/zera-s/">Highscreen Zera S</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/highscreen/rmont-hercules/">Highscreen Hercules</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/xiaomi/">Ремонт Xiaomi</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/xiaomi/mi4i/">Xiaomi Mi4i</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/xiaomi/mi4/">Xiaomi Mi4</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/xiaomi/mi3/">Xiaomi Mi3</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/xiaomi/redmi-2/">Xiaomi Redmi 2</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/xiaomi/mi-note/">Xiaomi Mi Note</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/fly/">Ремонт Fly</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/fly/tornado-one/">Fly Tornado One (iQ4511)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/evo-energy-1-iq4515/">Fly EVO Energy 1 (iQ4515)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/evo-energy-5-iq4504/">Fly EVO Energy 5 (iQ4504)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/evo-tech-4-iq4514/">Fly EVO Tech 4 (iQ4514)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/tornado-slim/">Fly Tornado Slim (iQ4516)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/evo-chic-4-iq4512/">Fly EVO Chic 4 (iQ4512)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/era-life-7-iq4505/">Fly ERA Life 7 (iQ4505)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/fly/era-energy-2-iq4401/">Fly ERA Energy 2 (iQ4401)</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont-telefonov/motorola/">Ремонт Motorola</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-telefonov/motorola/remont-motorola-moto-x-style/">Motorola Moto X Style</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/remont-motorola-moto-x-play/">Motorola Moto X Play</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/remont-motorola-moto-g-3-gen/">Motorola Moto G 3 gen</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/moto-g-2-gen/">Motorola Moto G 2 gen</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/moto-g/">Motorola Moto G</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/razr-xt910/">Motorola RAZR XT910</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/moto-x-2-gen/">Motorola Moto X 2 gen</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/razr-hd-xt925/">Motorola RAZR HD XT925</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/razr-m-xt905/">Motorola RAZR HD XT925</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/droid-razr-hd/">Motorola Droid RAZR HD</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-telefonov/motorola/droid-turbo/">Motorola Droid Turbo</a>
			</div>
		</li>
	</ul>
</li>
</ul>
</li>
<li>
<div>
	<a href="/remont_planshetov/">Планшеты</a>
	<span class="btn-submenu"></span>                </div>
<ul class="mob-submenu">
<li>
	<div>
		<a href="/remont_planshetov/samsung/">Ремонт Samsung</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/samsung/samsung-galaxy-tab-a-sm-t550/">Samsung Galaxy Tab A SM-T550</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/remont-samsung-galaxy-tab-e-sm-t560/">Samsung Galaxy Tab E SM-T560</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/remont-samsung-galaxy-tab-a-sm-t355/">Samsung Galaxy Tab A SM-T355</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-4-70-sm-t230/">Samsung Galaxy Tab 4 7.0" SM-T230</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-4-10-1-sm-t530/">Samsung Galaxy Tab 4 10.1" SM-T530</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-s-10-5-sm-t800/">Samsung Galaxy Tab S 10.5" SM-T800</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-s-84-sm-t700/">Samsung Galaxy Tab S 8.4" SM-T700</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-note-gt-n8000/">Samsung Galaxy Note 10.1" GT-N8000</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-note-101-p6050/">Samsung Galaxy Note 10.1" SM-P6050</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-note-pro-122-sm-p905/">Samsung Galaxy Note Pro 12.2" SM-P905</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-note-80-gt-n5100/">Samsung Galaxy Note 8.0" GT-N5100</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-pro-84-sm-t320/">Samsung Galaxy Tab PRO 8.4" SM-T320</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-pro-t520/">Samsung Galaxy Tab PRO 10.1" SM-T520</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-77-p6800/">Samsung Galaxy Tab 7.7" P6800</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-p7300/">Samsung Galaxy Tab 8.9" GT-P7300</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-2-p5100/">Samsung Galaxy Tab 2 10.1" GT-P5100</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-2-p3100/">Samsung Galaxy Tab 2 7" GT-P3100</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-3-80-sm-t310/">Samsung Galaxy Tab 3 8.0" SM-T310</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-3-p5200/">Samsung Galaxy Tab 3 10.1" GT-P5200</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/samsung/galaxy-tab-3-t210/">Samsung Galaxy Tab 3 7.0" SM-T210</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont_planshetov/nexus/">Ремонт Nexus</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/nexus/7/">Nexus 7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/nexus/9/">Nexus 9</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont_planshetov/xiaomi/">Ремонт Xiaomi</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/xiaomi/mi-pad/">Xiaomi Mi Pad</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont_planshetov/sony/">Ремонт Sony Tablet </a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/sony/xperia-z4-tablet/">Sony Xperia Z4 Tablet</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/sony/xperia-z3-tablet-compact/">Sony Xperia Z3 Compact Tablet</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/sony/xperia-tablet-z2/">Sony Xperia Z2 Tablet </a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/sony/xperia-tablet-z/">Sony Xperia Z Tablet</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/sony/xperia-tablet-s/">Sony Xperia Tablet S</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont_planshetov/asus/">Ремонт Asus</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/asus/fonepad-7/">Asus Fonepad 7</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/asus/transformer-pad-tf103c/">Asus Transformer Pad (TF103C)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/asus/transformer-pad-tf701t/">ASUS Transformer Pad (TF701T)</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/asus/memo-pad-hd-8-me180a/">Asus MeMO Pad HD 8 (ME180A)</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/remont_planshetov/nokia/">Ремонт Nokia</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont_planshetov/nokia/lumia-2520/">Nokia Lumia 2520</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont_planshetov/nokia/n1/">Nokia N1</a>
			</div>
		</li>
	</ul>
</li>
</ul>
</li>
<li>
	<div>
		<a href="/remont-noutbukov/">Ноутбуки</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/remont-noutbukov/asus/">Asus</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/acer/">Acer</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/hp/">HP</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/dell/">Dell</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/samsung/">Samsung</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/lenovo/">Lenovo</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/sony/">Sony</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/toshiba/">Toshiba</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/packard-bell/">Packard Bell</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/zamena-matriczyi/">Замена матрицы ноутбука</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/remont-noutbukov/remont-klaviaturyi/">Ремонт клавиатуры ноутбука</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/akczii/">Акции</a>
	</div>
</li>
<li>
	<div>
		<a href="/about/">О нас</a>
		<span class="btn-submenu"></span>                </div>
	<ul class="mob-submenu">
		<li>
			<div>
				<a href="/about/kak-myi-rabotaem/">Как мы работаем</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/about/vyiezd-mastera-i-kurera/">Выезд мастера и курьера</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/about/garantii/">Гарантии</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/about/blog/">Наш блог</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/about/voprosyi-i-otvetyi/">Вопросы и ответы</a>
			</div>
		</li>
		<li>
			<div>
				<a href="/about/otzyivyi/">Отзывы</a>
			</div>
		</li>
	</ul>
</li>
<li>
	<div>
		<a href="/contacts/">Контакты</a>
	</div>
</li>
</ul>
</div>

<? if(!empty($this->params['navbar']) and $this->params['navbar']): ?>
<div class="b-titlebar clearfix">
	<div class="container">
		<h1 class="text-xs-center"><?=Html::encode($this->title)?></h1>
		<ul class="crumbs text-xs-center">
			<li></li>
			<li><a href="/">Главная</a></li>
			<? $breadcrumbs=empty($this->params['breadcrumbs']) ? [] : $this->params['breadcrumbs'] ;
				foreach($breadcrumbs as $b) echo $b;
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
							<li><i class="icon-chevron-right"></i><a href="/about/kak-myi-rabotaem/">Как мы работаем</a></li>
							<li><i class="icon-chevron-right"></i><a href="/about/vyiezd-mastera-i-kurera/">Выезд мастера и курьера</a></li>
							<li><i class="icon-chevron-right"></i><a href="/about/garantii/">Гарантии</a></li>
							<li><i class="icon-chevron-right"></i><a href="/about/blog/">Наш блог</a></li>
							<li><i class="icon-chevron-right"></i><a href="/about/voprosyi-i-otvetyi/">Вопросы и ответы</a></li>
							<li><i class="icon-chevron-right"></i><a href="/about/otzyivyi/">Отзывы</a></li>
						</ul>
					</section>
				</div>
				<hr class="dashed hidden-sm hidden-md hidden-lg" style="margin-top: 0px;clear:both;">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<section class="b-widgets-wrap">
						<h3>Контактная информация</h3>
						<?=$this->render('@app/views/site/contact-info')?>
					</section>
				</div>
				<hr class="dashed hidden-md hidden-lg" style="margin-top: 0px;clear:both;">
				<div class="col-md-4 col-lg-4">
					<section class="b-widgets-wrap">
						<div class="feedback-form xform" id="form-feedback" data-url="/ajax/feedback/">
							<h3>Напишите нам</h3>
							<?=Html::beginForm('/ajax/feedback/','post',['class'=> "b-form iq-feedback-form ajax-form"]); ?>
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
									<i class="icon-phone"></i> +7 (963) 656-83-79
								</a>
							</div>
							<div class="phone-desktop hidden-xs hidden-ms">
								<i class="icon-phone"></i> +7 (963) 656-83-79
							</div>
							<div class="iq-contacts-time hidden-xs hidden-ms">
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

<script src="/assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script>window.params = {};</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
