<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\fuel92\models\Fuel92 */

$this->title = 'Update Fuel92: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fuel92s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fuel92-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
