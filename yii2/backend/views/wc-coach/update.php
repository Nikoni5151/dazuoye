<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCoach */

$this->title = '修改教练信息: ' . $model->coachid;
$this->params['breadcrumbs'][] = ['label' => '教练列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->coachname, 'url' => ['view', 'id' => $model->coachid]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="wc-coach-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
