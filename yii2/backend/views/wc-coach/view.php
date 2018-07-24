<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCoach */

$this->title = $model->coachname;
$this->params['breadcrumbs'][] = ['label' => '教练列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-coach-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改教练信息', ['update', 'id' => $model->coachid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除教练信息', ['delete', 'id' => $model->coachid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个教练的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'coachid',
            'coachname',
            'cname',
        ],
    ]) ?>

</div>
