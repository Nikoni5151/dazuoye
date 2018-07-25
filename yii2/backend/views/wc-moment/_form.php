<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMoment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-moment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'describes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['value' => 'http://']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
