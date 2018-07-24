<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMessage */

$this->title = '修改留言: ' . $model->messageid;
$this->params['breadcrumbs'][] = ['label' => '留言列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->messageid, 'url' => ['view', 'id' => $model->messageid]];
$this->params['breadcrumbs'][] = '修改留言';
?>
<div class="np-message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
