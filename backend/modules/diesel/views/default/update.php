<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\diesel\models\Diesel */

$this->title = 'Update Diesel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Diesels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diesel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
