<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\main_pages\models\MainPages */

$this->title = 'Обновить страницу: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="main-pages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
