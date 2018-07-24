<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlace */

$this->title = $model->placeid;
$this->params['breadcrumbs'][] = ['label' => 'Wc Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-place-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改场地信息', ['update', 'id' => $model->placeid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除场地信息', ['delete', 'id' => $model->placeid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个场地的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'placeid',
            'placename',
            'number',
        ],
    ]) ?>

</div>
