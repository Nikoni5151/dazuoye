<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */

$this->title = $model->cname;
$this->params['breadcrumbs'][] = ['label' => '国家列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改国家信息', ['update', 'id' => $model->cid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除国家信息', ['delete', 'id' => $model->cid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个国家的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cid',
            'cname',
            'grade',
            'flag:ntext',
        ],
    ]) ?>

</div>
