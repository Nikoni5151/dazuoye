<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMember */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="np-member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mid')->textInput() ?>

    <?= $form->field($model, 'mname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hometown')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sign')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
