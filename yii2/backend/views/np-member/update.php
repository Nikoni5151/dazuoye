<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMember */

$this->title = '修改信息: ' . $model->mname;
$this->params['breadcrumbs'][] = ['label' => '成员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mname, 'url' => ['view', 'id' => $model->mid]];
$this->params['breadcrumbs'][] = '修改信息';
?>
<div class="np-member-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
