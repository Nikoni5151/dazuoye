<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcTeam */

$this->title = '修改球队信息: ' . $model->tname;
$this->params['breadcrumbs'][] = ['label' => '球队列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tname, 'url' => ['view', 'id' => $model->tid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-team-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
