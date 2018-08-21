<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\bitum\models\Bitum */

$this->title = 'Update Bitum: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bitum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
