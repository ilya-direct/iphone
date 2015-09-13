<div class="content shortcodes">
<div class="container">
<div class="element-wrap centered">
	<ul class="bmstu-services-gallery bmstu-services-brand">
		<? foreach($devices as $device): ?>
		<li class="item">
			<div class="b-service">
				<div class="image-wrap">
					<a href="<?=$device['link']?>"><img src="/images/<?=$device['imagename']?>" alt="Ремонт <?=$device['name']?>"></a>
				</div>
				<h3 class="title centered">
					<a href="<?=$device['link']?>" class="dark-link"><?=$device['name']?></a>
				</h3>
			</div>
		</li>
		<? endforeach; ?>
	</ul>
</div>
<div class="content-text">
	<?=$text?>
</div>
<div class="gap" style="height: 20px;"></div>
<section class="element-wrap bmstu-block-services-feedback margin-0">
	<?=$this->render('feedback+more-about-us');?>
</section>
</div>
</div>