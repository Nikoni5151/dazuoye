<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */
if(isset($tname)){
    $this->title = $tname . "队在" . $model->cname;
    
}
else{
    if(isset($coachname)){
        $this->title = $coachname . '教练在' . $model->cname;
    }
    else{
        $this->title = $model->cname;
    }
}

$this->params['breadcrumbs'][] = ['label' => '国家列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改国家信息', ['update', 'id' => $model->cid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除国家信息', ['delete', 'id' => $model->cid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这个国家的信息吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cid',
            'cname',
            'grade',
            'flag:ntext',
        ],
    ]) ?>

    <br/>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-team/country','cname' => $model->cname]) ?>">所属球队</a>
    <a> </a>
    <a class="btn btn-success" href="<?php echo Url::to(['wc-coach/country','cname' => $model->cname]) ?>">所属教练</a>

</div>
