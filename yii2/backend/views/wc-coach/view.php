<?php

use yii\helpers\Html;
use yii\helpers\url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCoach */
if(isset($tname)){
    $this->title = $tname . "队的主教练：" .$model->coachname;
}
else{
    $this->title = $model->coachname;
}

$this->params['breadcrumbs'][] = ['label' => '教练列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-coach-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改教练信息', ['update', 'id' => $model->coachid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除教练信息', ['delete', 'id' => $model->coachid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个教练的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'coachid',
            'coachname',
            'cname',
        ],
    ]) ?>

    <br/>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-team/coach','coachname' => $model->coachname]) ?>">带领球队</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-country/coach','cname' => $model->cname,'coachname' => $model->coachname]) ?>">所在国家</a>

</div>
