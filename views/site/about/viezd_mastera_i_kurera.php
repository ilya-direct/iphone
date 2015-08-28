<?
use yii\helpers\Html;
$this->title = 'Выезд мастера и курьера';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [$breadcrumb];

?>
<div class="content">
	<div class="container">
		<div class="bs-row">				<div class="col-md-9 col-lg-9">
				<div class="element-wrap content-text">
					<p><span style="font-size: 18pt;">Выезд мастера</span></p>
					<p style="text-align: justify;">Благодаря услуге выезд мастера, Вам не обязательно приезжать к нам в сервис, чтобы отремонтировать сломанное устройство. Для этого достаточно заказать мастера. Мастер приедет в назначенное Вами место и время. Хотим отметить, что не все услуги мастер может выполнить на выезде, более подробно о данной услуге вы можете узнать у наших менеджеров.</p><div class="collapsible collapse-xs collapsed">
						<div class="collapse-container">
							<p><span style="font-size: 15pt; color: #ff6600;">Москва - 600 руб.</span><br><span style="font-size: 15pt; color: #ff6600;"> Московская область (до 15 км.) - 1500 руб.</span></p>
							<p><br><span style="font-size: 18pt;">Курьерская доставка</span></p>
							<p style="text-align: justify;">Для Вашего удобства в нашем сервисном центре предусмотрена услуга курьерской доставки сломанной техники в сервис. Если по каким-то причинам Вам неудобно привезти сломанное устройство к нам, Вы можете заказать курьера, который приедет в назначенное Вами место и время и заберет оборудование, которое требует ремонта, после того как ремонт будет успешно завершен Вы может самостоятельно приехать к нам либо заказать курьера.</p>
							<p><span style="font-size: 15pt; color: #ff6600;">Забор оборудования у клиента - 200 руб.</span></p>
							<p><span style="font-size: 15pt; color: #ff6600;">Доставка оборудование клиенту - 200 руб. </span></p>
							<div style="text-align: justify;"> </div>
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