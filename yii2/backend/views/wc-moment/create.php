<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcMoment */

$this->title = '添加精彩时刻';
$this->params['breadcrumbs'][] = ['label' => '精彩时刻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-moment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
