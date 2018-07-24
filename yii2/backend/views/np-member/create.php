<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NpMember */

$this->title = '创建新成员';
$this->params['breadcrumbs'][] = ['label' => '成员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-member-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
