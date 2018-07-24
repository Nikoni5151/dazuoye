<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'pname') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'tid') ?>

    <?= $form->field($model, 'goals') ?>

    <?php // echo $form->field($model, 'cname') ?>

    <?php // echo $form->field($model, 'club') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
