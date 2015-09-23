<!-- Отзывы -->
<section class="element-wrap margin-0 bmstu-testimonials" id="bmstu-testimonials">
	<h3 class="lined margin-20 title">Отзывы</h3>
	<div class="controls">
		<span class="prev"></span>
		<span class="next"></span>
	</div>
	<ul class="bxlider bmstu-list-unstyled" id="bmstu-testimonials-slider">
		<? $feedbacks=app\models\db\Feedback::find()->where(['publish'=>1])->orderBy(['date'=>SORT_DESC])->all(); ?>
		<? foreach($feedbacks as $fb): ?>
		<li>
			<div class="b-recall">
				<div class="recall-text"><?=$fb->fulltext?></div>
				<div class="recall-author"><span><?=$fb->firstname?></span></div>
			</div>
		</li>
		<? endforeach;?>
	</ul>
	<hr class="dashed" style="margin-top: 0px;margin-bottom:10px;">
	<div class="bs-row margin-20 clearfix">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<a href="http://iphone/about/otzivi/#testimonials" class="btn btn-block bmstu-btn"><i class="icon-comments"></i>Все отзывы</a>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<a href="http://iphone/about/otzivi/" class="btn btn-block bmstu-btn"><i class="icon-edit"></i>Оставить свой отзыв</a>
		</div>
	</div>
</section>