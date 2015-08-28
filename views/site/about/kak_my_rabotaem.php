<?
use yii\helpers\Html;
$this->title = 'Как мы работаем';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [$breadcrumb];

?>
<div class="content">
	<div class="container">
		<div class="bs-row">				<div class="col-md-9 col-lg-9">
				<div class="element-wrap content-text">
					<h2>Схема работы нашего сервисного:</h2>
					<ol>
						<li>Вы приезжаете к нам в сервис (либо вызываете<a href="about/vyiezd-mastera-i-kurera/"> курьера или мастера</a>)</li>
						<li>Мы производим <strong>бесплатную</strong> диагностику сломанного устройства.</li>
						<li>Объявляем сроки и стоимость ремонта.</li>
						<li>Вы получаете документ о приемке оборудования с описанием характера поломки.</li>
						<li>Ожидаете завершения ремонта.*</li>
						<li>Получаете отремонтированное устройство.</li>
					</ol>
					<div class="collapsible collapse-xs collapsed">
						<div class="collapse-container">
							<h3> </h3>
							<h3>Нет времени, или нет желания ехать к нам? Вызовите курьера!</h3>
							<p style="text-align: justify;">Если Вы не хотите тратить свое время на поездку к нам в сервис, для этого мы предоставляем услугу курьера. Курьер приедет и заберет сломанное устройство, а после  привезет отремонтированное в назначенное Вами место. Подробнее <a href="vyezd-mastera">тут</a>.</p>
							<h3><strong>Мастер на выезде?! Почему бы и нет!</strong></h3>
							<p>Так же Вы может воспользоваться услугой вызов мастера. Наши специалисты готовы выехать в назначенное Вами место для проведения ремонта. Если ремонт нельзя осуществить на месте, мастер заберет сломанное устройство в сервис, а после починки мы доставим его Вам обратно. Подробнее <a href="vyezd-mastera">тут</a>.</p>
							<p style="text-align: justify;"> </p>
							<p style="text-align: justify;"><em> * Как правило большинство устройство мы ремонтируем в день обращения, но если понадобится более сложные ремонт на это уходит 1-2 дня.</em></p>
							<p style="text-align: justify;"> </p>
						</div>
						<div class="collapse-buttons text-xs-center">
							<a href="#" class="collapse-open"><i class="icon-caret-down"></i><span>Подробнее</span></a>
							<a href="#" class="collapse-close"><i class="icon-caret-up"></i><span>Скрыть</span></a>
						</div>
					</div>
				</div>
			</div>
			<?=$this->render('/site/about/_submenu')?>
		</div>		</div>
</div>