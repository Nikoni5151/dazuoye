<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcMatch */

$this->title = '添加比赛';
$this->params['breadcrumbs'][] = ['label' => '比赛列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
