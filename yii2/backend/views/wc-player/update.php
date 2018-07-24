<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = '修改球员信息: ' . $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pid, 'url' => ['view', 'id' => $model->pid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
