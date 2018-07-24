<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NpMessage */

$this->title = $model->messageid;
$this->params['breadcrumbs'][] = ['label' => '留言列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-message-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->messageid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->messageid], [
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
            'messageid',
            'content',
            'date',
        ],
    ]) ?>

</div>
