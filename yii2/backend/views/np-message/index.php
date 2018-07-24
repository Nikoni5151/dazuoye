<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NpMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '留言列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加留言', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'messageid',
            'content',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
