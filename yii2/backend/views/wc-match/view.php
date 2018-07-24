<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcMatch */

$this->title = $model->matchid;
$this->params['breadcrumbs'][] = ['label' => '比赛列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-match-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改比赛信息', ['update', 'id' => $model->matchid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除比赛信息', ['delete', 'id' => $model->matchid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这场比赛的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'matchid',
            'hometeam',
            'awayteam',
            'date',
            'hscore',
            'ascore',
            'win',
        ],
    ]) ?>

</div>
