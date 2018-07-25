<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'matchid') ?>

    <?= $form->field($model, 'hometeam') ?>

    <?= $form->field($model, 'awayteam') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'hscore') ?>

    <?php // echo $form->field($model, 'ascore') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
