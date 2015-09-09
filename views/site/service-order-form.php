<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
?>
<div class="title">
	<p class="intro">
		<strong>Оформите заявку</strong><br>
		И получите <strong class="colored">5% скидку</strong> на ремонт.
	</p>
</div>
<div class="centered">
	<? $form = ActiveForm::begin(['action'=>'/ajax/service-order/',
		'options' => ['class' => 'b-form iq-service-order service-form']]);?>
		<div class="right-wrap col-lg-6 col-md-6">
			<?= $form->field($model, 'name',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-user"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Ваше имя (*)']); ?>
			<?= $form->field($model, 'phone',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-phone"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Телефон (*)']); ?>
		</div>
		<div class="left-wrap col-lg-6 col-md-6">
				<?= $form->field($model, 'comment',['options'=>['class'=>'textarea-wrap'],'template'=>'<i class="icon-pencil"></i>{input}{error}'])->textarea(['class' => 'field-name','placeholder'=>'Опишите проблему']); ?>
		</div>
		<div class="clearfix"></div>
		<div class="submit">
			<?= Html::submitButton('Отправить', ['class' => 'btn-submit btn colored']) ?>
		</div>
	<?php ActiveForm::end() ?>
</div>