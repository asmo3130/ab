<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\fuel95\models\Fuel95 */

$this->title = 'Update Fuel95: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fuel95s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fuel95-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
