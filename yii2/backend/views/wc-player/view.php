<?php

use yii\helpers\Html;
use yii\helpers\url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = $model->pname;
$this->params['breadcrumbs'][] = ['label' => '球员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->pid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个球员的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pid',
            'pname',
            'number',
            'tid',
            'goals',
            'cname',
            'club',
        ],
    ]) ?>


    <br/>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-team/player','tid' => $model->tid,'pname' => $model->pname]) ?>">所在球队</a>

</div>
