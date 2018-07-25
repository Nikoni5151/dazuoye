<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WcPlayerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
if(isset($tname)){
    $this->title = $tname . '队的球员列表';
}
else{
    $this->title = '球员列表';
}
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加新球员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pid',
            'pname',
            'number',
            'tid',
            'goals',
            'cname',
            'club',

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
</div>
