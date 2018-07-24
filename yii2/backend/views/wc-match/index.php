<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '比赛列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加比赛', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'matchid',
            'hometeam',
            'awayteam',
            'date',
            'hscore',
            'ascore',
            // 'win',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
