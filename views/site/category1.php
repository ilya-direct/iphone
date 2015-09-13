<div class="content">
<div class="container">
<div id="bmstu-gallery-desktop" class="b-tabs m-nav-left margin-40 bmstu-tabs bmstu-services-types hidden-xs hidden-sm">
<ul class="tabs-nav">
	<li class="active"><a href="<?=$menu[$brands[0]]->link?>"><span><?=$menu[$brands[0]]->title;?></span></a></li>
	<? for($i=1;$i<count($brands);$i++): ?>
	<li><a href="<?=$menu[$brands[$i]]->link;?>"><span><?=$menu[$brands[$i]]->title;?></span></a></li>
	<? endfor;?>
</ul>
<div class="tabs-content">
<? for($i=0;$i<count($brands);$i++): ?>
<div class="tab<?=($i==0) ? ' active': '';?>">
	<ul class="bmstu-services-gallery centered">
		<?foreach($categories[$brands[$i]] as $item): ?>
		<li class="item">
			<div class="b-service">
				<div class="image-wrap">
					<a href="<?=$item['link']?>" tabindex="-1">
						<img class="lazy" data-original="/assets/images/<?=$item['imagename']?>" <?=($i==0) ? 'src="/assets/images/'.$item['imagename'].'"': '';?> alt="Ремонт <?=$item['name']?>">
					</a>
				</div>
				<h3 class="title centered">
					<a href="<?=$item['link']?>" class="dark-link"><?=$item['name']?></a>
				</h3>
			</div>
		</li>
		<?endforeach;?>
	</ul>
</div>
<? endfor; ?>
</div>
</div>
<div id="bmstu-gallery-mobile" class="b-accordion bmstu-accordion bmstu-services-types hidden-md hidden-lg">
	<? for($i=0;$i<count($brands);$i++): ?>
	<div class="b-spoiler m-alt">
		<div class="spoiler-title"><span><?=$menu[$brands[$i]]->title?></span></div>
		<div class="spoiler-content"></div>
	</div>
	<? endfor; ?>
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