<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCoach */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-coach-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'coachname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
