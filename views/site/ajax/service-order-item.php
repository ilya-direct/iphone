<?
use yii\helpers\Html;
?>
<div class="modal" style="max-width: 500px;min-width: 240px;">
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h3 class="lined text-center">Заказ услуги</h3>
	</div>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h4 class="text-center"><?=$device?><br><span style="font-size:13px"><?=$service?></span></h4>
	</div>
	<div class="centered">
		<?=Html::beginForm('/ajax/service-order-item/','post',['class'=>"b-form iq-service-order-item service-form"]); ?>
			<input type="hidden" name="deviceassign_id" value="<?=$da?>">
			<div class="input-wrap m-full-width">
				<i class="icon-user"></i>
				<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required style="background:#fff;">
			</div>
			<div class="input-wrap m-full-width">
				<i class="icon-phone"></i>
				<input class="field-phone" type="tel" placeholder="Телефон (*)" name="phone" data-content="" value="" required style="background:#fff;">
			</div>
			<div class="textarea-wrap">
				<i class="icon-pencil"></i>
				<textarea class="field-comment" placeholder="Примечание" name="comment" data-content="" style="background:#fff;"></textarea>
			</div>
			<div class="clearfix"></div>
			<div class="submit" style="margin-top: 10px;">
				<input class="btn-submit btn colored" type="submit" value="Отправить" style="margin-bottom: 0;">
			</div>
		<?=Html::endForm() ?>
	</div>
</div>