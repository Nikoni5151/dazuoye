<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcTeam */

if(isset($cname)){
    $this->title = $cname . '的' . $model->tname . '队';
}
else{
    if(isset($coachname)){
        $this->title = $coachname . '教练带领的' . $model->tname . '队';
    }
    else{
        if(isset($pname)){
            $this->title = $pname . '所在的' . $model->tname . '队';
    }
    else{
            $this->title = $model->tname;
        }
    }
    
}

$this->params['breadcrumbs'][] = ['label' => '球队列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->tid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->tid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个球队的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tid',
            'tname',
            'grade',
            'coachname',
            'cname',
        ],
    ]) ?>
    <br/>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-player/team','id' => $model->tid,'name' => $model->tname]) ?>">所属成员</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-country/team','name' => $model->cname,'tname' => $model->tname]) ?>">所在国家</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-coach/team','name' => $model->coachname,'tname' => $model->tname]) ?>">主教练</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-match/team','tname' => $model->tname]) ?>">参加比赛</a>
   
</div>
