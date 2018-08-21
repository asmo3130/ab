<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gas_p\models\GasP */

$this->title = 'Update Gas P: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gas Ps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gas-p-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
