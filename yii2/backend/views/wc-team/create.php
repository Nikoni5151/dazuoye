<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcTeam */

$this->title = '添加新球队';
$this->params['breadcrumbs'][] = ['label' => '球队列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-team-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
