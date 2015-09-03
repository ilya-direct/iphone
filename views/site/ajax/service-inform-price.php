<?
use yii\helpers\Html;
?>
<div class="modal" style="max-width: 500px;">
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h3 class="text-center"><?=$device?><br><span style="font-size:13px"><?=$service?></span></h3>
	</div>
	<div class="b-message message-info text-center" style="padding: 9px 12px;font-size:13;line-height:1.2;">
		Для уточнения стоимости услуги звоните по телефону
		<div class="phone hidden-xs" style="font-size:16px;line-height:1;font-weight:bold;margin:8px 0;">+7 963 656-83-77</div>
		<div class="phone hidden-sm hidden-md hidden-lg">
			<a href="tel:8+%28495%29+532-49-78" class="btn small colored" style="margin:8px 0;"><i class="icon-phone"></i>+7 963 656-83-77</a>
		</div>
		или заполните форму заявки.
	</div>
	<div class="centered">
		<h4 class="lined">Форма заявки</h4>
		<?=Html::beginForm('/ajax/service-inform-price/','post',['class'=>"b-form iq-service-inform-price service-form"]); ?>
			<input type="hidden" name="deviceassign_id" value="<?=$da?>">
			<div class="input-wrap m-full-width">
				<i class="icon-user"></i>
				<input class="field-name" type="text" placeholder="Ваше имя (*)" name="name" data-content="" value="" required style="background:#fff;">
			</div>
			<div class="input-wrap m-full-width">
				<i class="icon-phone"></i>
				<input class="field-phone" type="tel" placeholder="Телефон (*)" name="phone" data-content="" value="" required style="background:#fff;">
			</div>
			<div class="clearfix"></div>
			<div class="submit" style="margin-top: 10px;">
				<input class="btn-submit btn colored" type="submit" value="Отправить">
			</div>
		<?=Html::endForm(); ?>
	</div>
</div>
