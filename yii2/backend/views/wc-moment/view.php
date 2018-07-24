<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMoment */

$this->title = $model->momentid;
$this->params['breadcrumbs'][] = ['label' => '精彩时刻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-moment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->momentid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->momentid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个精彩时刻吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'momentid',
            'describes',
            'url:ntext',
        ],
    ]) ?>

</div>
