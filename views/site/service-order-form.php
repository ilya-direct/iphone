<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
	<? if(!empty($param['get_price'])): ?>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h3 class="text-center"><?=$param['title']?><br><span style="font-size:13px"><?=$param['service']?></span></h3>
	</div>
	<div class="b-message message-info text-center" style="padding: 9px 12px;font-size:13;line-height:1.2;">
		Для уточнения стоимости услуги звоните по телефону
		<div class="phone hidden-xs" style="font-size:16px;line-height:1;font-weight:bold;margin:8px 0;">+7 (963) 656-83-77</div>
		<div class="phone hidden-sm hidden-md hidden-lg">
			<a href="tel:8+%28495%29+532-49-78" class="btn small colored" style="margin:8px 0;"><i class="icon-phone"></i>+7 (963) 656-83-77</a>
		</div>
		или заполните форму заявки.
	</div>
	<? elseif(!empty($param['title']) && !empty($param['service'])): ?>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h3 class="lined text-center">Заказ услуги</h3>
	</div>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<h4 class="text-center"><?=$param['title']?><br><span style="font-size:13px"><?=$param['service']?></span></h4>
	</div>
	<? elseif(!empty($param['title'])): ?>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
	<div class="order-intro">
		<h3 class="lined centered"><?=$param['title']?></h3>
	</div>
	</div>
	<? else: ?>
	<div class="title" style="border-bottom:1px solid #eee;margin-bottom:10px;">
		<p class="intro">
			<strong>Оформите заявку</strong><br>
			И получите <strong class="colored">5% скидку</strong> на ремонт.
		</p>
	</div>
	<? endif;?>
<div class="centered">
	<? $form = ActiveForm::begin(['action'=>'/ajax/service-order/',
		'options' => ['class' => 'b-form iq-service-order service-form']]);?>
		<?=Html::hiddenInput($model->formName().'[device_id]', $model->device_id) ?>
		<?=Html::hiddenInput($model->formName().'[deviceassign_id]', $model->deviceassign_id) ?>
		<?if(empty($param['get_price'])){ ?>
		<div class="right-wrap col-lg-6 col-md-6">
			<?= $form->field($model, 'name',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-user"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Ваше имя (*)']); ?>
			<?= $form->field($model, 'phone',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-phone"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Телефон (*)']); ?>
		</div>
		<div class="left-wrap col-lg-6 col-md-6">
				<?= $form->field($model, 'comment',['options'=>['class'=>'textarea-wrap'],'template'=>'<i class="icon-pencil"></i>{input}{error}'])->textarea(['class' => 'field-name','placeholder'=> empty($param['service']) ? 'Опишите проблему' : 'Примечание']); ?>
		</div>
		<?}else{?>
			<?= $form->field($model, 'name',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-user"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Ваше имя (*)']); ?>
			<?= $form->field($model, 'phone',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-phone"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Телефон (*)']); ?>
		<?}?>
		<div class="clearfix"></div>
		<div class="submit">
			<?= Html::submitButton('Отправить', ['class' => 'btn-submit btn colored']) ?>
		</div>
	<?php ActiveForm::end() ?>
</div>