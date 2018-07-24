<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcCoach */

$this->title = '添加新教练';
$this->params['breadcrumbs'][] = ['label' => '教练列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-coach-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
