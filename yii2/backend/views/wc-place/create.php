<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WcPlace */

$this->title = '添加场地';
$this->params['breadcrumbs'][] = ['label' => '比赛场地', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wc-place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
