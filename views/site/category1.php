<div class="content">
<div class="container">
<div id="iq-gallery-desktop" class="b-tabs m-nav-left margin-40 iq-tabs iq-services-types hidden-xs hidden-sm">
<ul class="tabs-nav">
	<li class="active"><a href="<?=$menu[$brands[0]]->link?>"><span><?=$menu[$brands[0]]->title;?></span></a></li>
	<? for($i=1;$i<count($brands);$i++): ?>
	<li><a href="<?=$menu[$brands[$i]]->link;?>"><span><?=$menu[$brands[$i]]->title;?></span></a></li>
	<? endfor;?>
</ul>
<div class="tabs-content">
<? for($i=0;$i<count($brands);$i++): ?>
<div class="tab<?=($i==0) ? ' active': '';?>">
	<ul class="iq-services-gallery centered">
		<?foreach($categories[$brands[$i]] as $item): ?>
		<li class="item">
			<div class="b-service">
				<div class="image-wrap">
					<a href="remont-telefonov/<?=$brands[$i]?>/galaxy-alpha/" tabindex="-1">
						<img class="lazy" data-original="/assets/images/devices/<?=$item->imagename?>" <?=($i==0) ? 'src="/assets/images/devices/'.$item->imagename.'"': '';?> alt="Ремонт <?=$item->name?>">
					</a>
				</div>
				<h3 class="title centered">
					<a href="remont-telefonov/samsung/galaxy-alpha/" class="dark-link"><?=$item->name?></a>
				</h3>
			</div>
		</li>
		<?endforeach;?>
	</ul>
</div>
<? endfor; ?>
</div>
</div>
<div id="iq-gallery-mobile" class="b-accordion iq-accordion iq-services-types hidden-md hidden-lg">
	<? for($i=0;$i<count($brands);$i++): ?>
	<div class="b-spoiler m-alt">
		<div class="spoiler-title"><span><?=$menu[$brands[$i]]->title?></span></div>
		<div class="spoiler-content"></div>
	</div>
	<? endfor; ?>
</div>
<div class="content-text">
	<p><strong style="font-size: 16px;">Срочный ремонт телефонов не дорого с гарантией</strong></p>
	<p>В наше время сложно представить человека, который не пользуется мобильным телефона. Не удивительно, что ремонт телефонов одна из самых востребованных услуг.</p>
	<p>Наши специалисты имеют огромный опыт ремонт мобильной техники, это говорит о том что ремонт телефонов в iQСервис будет осуществлен на профессиональном уровне. Мы готовы взяться за работу любой сложности, имеем опыт восстановления даже самых безнадежных устройств.</p><div class="collapsible collapse-xs collapsed">
		<div class="collapse-container">
			<p>Мы предоставляем бесплатную диагностику перед проведением работ, что позволит выявить точную причину поломки, после чего наши мастера произведут ремонт в кратчайшие сроки. </p>
		</div>
		<div class="collapse-buttons text-xs-center">
			<a href="#" class="collapse-open"><i class="icon-caret-down"></i><span>Подробнее</span></a>
			<a href="#" class="collapse-close"><i class="icon-caret-up"></i><span>Скрыть</span></a>
		</div>
	</div>
</div>
<div class="gap" style="height: 20px;"></div>
<section class="element-wrap iq-block-services-feedback margin-0">
	<?=$this->render('feedback+more-about-us');?>
</section>
</div>
</div>