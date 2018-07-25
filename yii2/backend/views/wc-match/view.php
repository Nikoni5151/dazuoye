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
        <?= Html::a('修改', ['update', 'id' => $model->matchid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->matchid], [
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
            'matchid',
            'hometeam',
            'awayteam',
            'date',
            'hscore',
            'ascore',
            'place',
            'level',
        ],
    ]) ?>

    <br/>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-team/match','tname' => $model->hometeam]) ?>">主队信息</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-team/match','tname' => $model->awayteam]) ?>">客队信息</a>


</div>
