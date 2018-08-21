<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\diesel\models\Diesel */

$this->title = 'Create Diesel';
$this->params['breadcrumbs'][] = ['label' => 'Diesels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diesel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
