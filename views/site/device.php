<?
use yii\helpers\Html;
?>
<div class="content shortcodes">
<div class="container">
<div class="bs-row">
	<div class="col-sm-5 col-md-3">
		<!-- Главное изображение -->
		<div class="element-wrap content-text">
			<div class="img-wrap">
				<img class="centered" src="/assets/images/devices/<?=$model->device->imagename?>" alt="<?=$this->title?>">
			</div>
		</div>
	</div>
	<div class="col-sm-7 col-sm-9">
		<div class="element-wrap content-text">
			<?=$model->device->description?>
		</div>
		<div class="bs-row">
			<div class="col-sm-7 col-md-6">
				<div class="element-wrap content-text">
					<a href="#" class="btn btn-block big colored btn-ajax-popup"
					   data-fancybox-href="/ajax/service-order/"
					   data-resource-id="<?=$model->device->id?>">
						Оставить заявку на ремонт
					</a>
				</div>
			</div>
			<div class="col-sm-5 col-md-6"></div>
		</div>
	</div>
</div>
<section class="element-wrap iq-advantages margin-20">
	<h3 class="lined centered margin-40">Наши преимущества</h3>
	<div class="bs-row">
		<div class="col-md-4 col-lg-4">
			<article class="icon-box medium">
				<i class="icon-truck medium m-square light"></i>
				<h4>Доставка техники в сервис</h4>
				<p>Курьер приедет в назначенное место и заберет сломанное устройство, которое потом доставит в сервис, а после проведения ремонта привезет обратно.</p>
			</article>
		</div>
		<div class="col-md-4 col-lg-4">
			<article class="icon-box medium">
				<i class="icon-time medium m-square light"></i>
				<h4>Оперативный ремонт</h4>
				<p>Быстрый и качественный ремонт любой сложности. 90% устройств ремонтируем в день обращения.</p>
			</article>
		</div>
		<div class="col-md-4 col-lg-4">
			<article class="icon-box medium">
				<i class="icon-tag medium m-square light"></i>
				<h4>Высокое качество!</h4>
				<p>Используем только качественные комплектующие. При ремонтных работах применяем профессиональное оборудование.</p>
			</article>
		</div>
	</div>
</section>
<!-- Стоимость ремонта -->
<section class="element-wrap iq-services-prices margin-20">
<h2 class="lined centered margin-30">Стоимость ремонта  «<?=$model->device->name?>»</h2>
<div class="b-table">
<table class="iq-services-prices-table margin-20">
<thead>
<tr>
	<td class="col-1 iq-col-title">Наименование услуги</td>
	<td class="col-2 centered iq-col-price">Стоимость</td>
	<td class="col-3 centered iq-col-time">Сроки ремонта*</td>
	<td class="col-4 centered iq-col-warranty">Гарантия</td>
</tr>
</thead>
<tbody>
<? foreach($model->cat0 as $serv):?>
	<?=$this->render('device_tablerow',['serv'=>$serv,'display'=>true])?>
<? endforeach;?>
<? foreach($model->categories as $name=>$services): ?>
<tr class="tbl-group">
	<th colspan="4">
		<a href="#" class="tbl-collapse">
			<span class="iq-service-title"><?=$name?></span>
			<i class="icon-chevron-down down"></i>
			<i class="icon-chevron-up up"></i>
		</a>
	</th>
</tr>
<? foreach($services as $serv): ?>
	<?=$this->render('device_tablerow',['serv'=>$serv,'display'=>false])?>
<? endforeach?>
<?endforeach;?>
</tbody>
</table>
</div>
</section>
<div class="element-wrap margin-30 iq-prices-notes">
	<p><span class="star">*</span> Сроки ремонта зависят от наличия требуемых запчастей и загруженности мастеров.<br /><span class="star">**</span> Все цены на сайте указаны в рублях с учетом запчастей.</p>
</div>
<!-- Форма заявки -->
<div class="element-wrap">
	<div class="bs-row">
		<div class="col-lg-push-2 col-lg-8 col-md-push-2 col-md-8 col-sm-push-2 col-sm-8">
			<div class="service-form xform b-box gray" id="form-service-order" data-url="/ajax/service-order/">
				<?=$this->render('service-order-form')?>
			</div>
		</div>
	</div>
</div>
<section class="element-wrap iq-block-services-feedback margin-0">
	<?=$this->render('feedback+more-about-us') ?>
</section>
<? if(!empty($model->article)): ?>
<div class="element-wrap margin-10 iq-bottom-text content-text">
	<h2><?=$model->article->title?></h2>
	<?=$model->article->text?>
	<div class="collapse-buttons text-xs-center">
		<a href="#" class="collapse-open"><i class="icon-caret-down"></i><span>Подробнее</span></a>
		<a href="#" class="collapse-close"><i class="icon-caret-up"></i><span>Скрыть</span></a>
	</div>
</div>
<? endif;?>
</div>
</div>