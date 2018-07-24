<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */

$this->title = '修改国家信息: ' . $model->cname;
$this->params['breadcrumbs'][] = ['label' => '国家列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cname, 'url' => ['view', 'id' => $model->cid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
