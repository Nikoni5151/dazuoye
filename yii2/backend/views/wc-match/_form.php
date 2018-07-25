<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hometeam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'awayteam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'hscore')->textInput() ?>

    <?= $form->field($model, 'ascore')->textInput() ?>

    <?= $form->field($model, 'win')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
