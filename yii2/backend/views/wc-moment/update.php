<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMoment */

$this->title = '修改信息: ' . $model->momentid;
$this->params['breadcrumbs'][] = ['label' => '精彩时刻', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->momentid, 'url' => ['view', 'id' => $model->momentid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-moment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
