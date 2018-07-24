<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcCountry */

$this->title = '添加国家';
$this->params['breadcrumbs'][] = ['label' => '国家列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
