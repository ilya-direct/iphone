<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\ApplicationForm */
/* @var $form ActiveForm */
?>
<div class="xxx">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'comment') ?>
        <?= $form->field($model, 'deviceassign_id') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'service') ?>
        <?= $form->field($model, 'device') ?>
        <?= $form->field($model, 'subject') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- xxx -->
