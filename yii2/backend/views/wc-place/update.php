<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlace */

$this->title = '修改场地信息: ' . $model->placeid;
$this->params['breadcrumbs'][] = ['label' => '比赛场地', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->placeid, 'url' => ['view', 'id' => $model->placeid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-place-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
