<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcPlayer */

$this->title = '添加球员';
$this->params['breadcrumbs'][] = ['label' => '球员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-player-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
