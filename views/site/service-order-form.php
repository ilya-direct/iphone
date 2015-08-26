<?php
	use yii\helpers\Html;
?>
<div class="title">
	<p class="intro">
		<strong>Оформите заявку</strong><br>
		И получите <strong class="colored">5% скидку</strong> на ремонт.
	</p>
</div>
<div class="centered">
	<?=Html::beginForm('/ajax/service-order/','post',['class'=>"b-form iq-service-order service-form"]); ?>
		<input type="hidden" name="form-service-order" value="1">
		<div class="right-wrap col-lg-6 col-md-6">
			<div class="input-wrap m-full-width">
				<i class="icon-user"></i>
				<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required>
			</div>
			<div class="input-wrap m-full-width">
				<i class="icon-phone"></i>
				<input class="field-phone" type="tel" placeholder="Телефон (*)" name="phone" data-content="" value="" required>
			</div>
		</div>
		<div class="left-wrap col-lg-6 col-md-6">
			<div class="textarea-wrap">
				<i class="icon-pencil"></i>
				<textarea class="field-comment" placeholder="Опишите проблему" name="comment" data-content=""></textarea>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="submit">
			<input class="btn-submit btn colored" type="submit" value="Отправить">
		</div>
	<?=Html::endForm(); ?>
</div>