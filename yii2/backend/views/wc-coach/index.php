<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcCoachSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '教练列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-coach-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加新教练', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'coachid',
            'coachname',
            'cname',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
