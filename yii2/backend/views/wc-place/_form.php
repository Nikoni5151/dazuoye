<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlace */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-place-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'placeid')->textInput() ?>

    <?= $form->field($model, 'placename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
