<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gas_s\models\GasS */

$this->title = 'Update Gas S: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gas Ss', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gas-s-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
