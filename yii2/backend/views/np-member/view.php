<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMember */

$this->title = $model->mname;
$this->params['breadcrumbs'][] = ['label' => '成员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-member-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mid',
            'mname',
            'sex',
            'hometown',
            'sign',
        ],
    ]) ?>

</div>
