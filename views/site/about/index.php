<?
use yii\helpers\Html;
$this->title = 'О нас';
$this->params['navbar']= true;
$this->params['breadcrumbs']= [];

?>
<div class="content">
	<div class="container">
		<div class="bs-row">				<div class="col-md-9 col-lg-9">
				<div class="element-wrap content-text">
					<p style="text-align: justify;">Ну что ж! Давайте знакомится;) Мы команда опытных специалистов в области ремонта компьютерной техники. На протяжении уже более 10 лет организуем ремонт ноутбуков, а с появлением планшетов и смартфонов имеем достаточно большой опыт и в этой нише. На данный момент мы приводим к жизни устройства от таких производителей как Apple, Samsung, HTC, Sony, Nexus и другие устройства. Если вдруг возникла необходимость привести в чувства Ваш смартфон, планшет или ноутбук, обращайтесь к нам, мы с большим удовольствием поможем Вам!</p><div class="collapsible collapse-xs collapsed">
						<div class="collapse-container">
							<h2>Чем можем похвастаться:</h2>
							<ul>
								<li>Работаем на данном рынке с 2001 года и знаем в этом толк</li>
								<li>Мы обеспечены дорогостоящим профессиональным оборудованием</li>
								<li>Только высококачественные комплектующие (никаких "китайских" запчастей) </li>
								<li>Длительная гарантия на все услуги (от 3-х месяцев)</li>
								<li>82% устройств ремонтируем в день обращения </li>
								<li>Мы не "кидаем" и не "разводим", к работе относимся ответственно! </li>
							</ul>
						</div>
						<div class="collapse-buttons text-xs-center">
							<a href="#" class="collapse-open"><i class="icon-caret-down"></i><span>Подробнее</span></a>
							<a href="#" class="collapse-close"><i class="icon-caret-up"></i><span>Скрыть</span></a>
						</div>
					</div>
				</div>
			</div>
			<?=$this->render('/site/about/_submenu'); ?>
		</div>		</div>
</div>