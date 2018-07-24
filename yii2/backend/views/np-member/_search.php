<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="np-member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mid') ?>

    <?= $form->field($model, 'mname') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'hometown') ?>

    <?= $form->field($model, 'sign') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
