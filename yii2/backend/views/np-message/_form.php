<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="np-message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'content')->textArea(['rows' => 6 ]) ?>

    <?= $form->field($model,'date')->hiddenInput(['value' => date("Y-m-d H:i:s",intval(time()))])->label(false);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
