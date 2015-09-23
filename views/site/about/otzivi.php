<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="content">
	<div class="container">
		<div class="bs-row">
			<div class="col-md-9 col-lg-9">
				<div class="service-form xform" id="form-testimonial" data-url="/ajax/feedback/">
					<h2 class="text-xs-center margin-20 lined">Оставьте свой отзыв</h2>
					<? $form = ActiveForm::begin(['action'=>'/ajax/feedback/',
						'options' => ['class' => 'b-form bmstu-testimonial-form margin-30']]);?>
						<div class="row bs-row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<?= $form->field($feedbackForm, 'firstname',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-user"></i>{input}{error}'])->textInput(['class' => 'field-name','placeholder'=>'Ваше имя (*)']); ?>
								<?= $form->field($feedbackForm, 'email',['options'=>['class'=>'input-wrap m-full-width'],'template'=>'<i class="icon-envelope"></i>{input}{error}'])->textInput(['class' => 'field-email','placeholder'=>'Ваш Email']); ?>
							</div>
							<div class="col-sm-8 col-md-8 col-lg-8">
								<?= $form->field($feedbackForm, 'fulltext',['options'=>['class'=>'textarea-wrap'],'template'=>'<i class="icon-pencil"></i>{input}{error}'])->textarea(['class' => 'field-comment','placeholder'=>'Текст сообщения (*)']); ?>
							</div>
						</div>
						<hr class="dashed" style="margin-top: 0px;margin-bottom: 10px;">
						<div class="row bs-row">
							<div class="col-sm-4 col-md-3 col-sm-offset-4 col-md-offset-5">
								<?= Html::submitButton('Отправить', ['class' => 'btn-submit btn-block btn big colored']) ?>
							</div>
						</div>
					<?php ActiveForm::end() ?>
				</div>
				<div class="element-wrap bmstu-pages-testimonials" id="testimonials-all">
					<h2 class="text-xs-center lined margin-20">Все отзывы</h2>
					<? $fb=array_shift($feedbacks)?>
					<? if(is_object($fb)):?>
					<div class="b-recall">
						<div class="recall-text"><?=$fb->fulltext?></div>
						<div class="recall-author"><span><?=$fb->firstname?></span></div>
					</div>
					<? endif;?>
					<? foreach($feedbacks as $fb): ?>
					<hr class="dashed" style="margin-top: 0px;">
					<div class="b-recall">
						<div class="recall-text"><?=$fb->fulltext?></div>
						<div class="recall-author"><span><?=$fb->firstname?></span></div>
					</div>
					<? endforeach;?>
				</div>
			</div>
			<?=$this->render('/site/about/_submenu')?>
		</div>		</div>
</div>