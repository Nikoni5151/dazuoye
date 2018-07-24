<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMatch */

$this->title = '修改比赛信息: ' . $model->matchid;
$this->params['breadcrumbs'][] = ['label' => '比赛列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->matchid, 'url' => ['view', 'id' => $model->matchid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
