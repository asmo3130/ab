<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\market_news\models\MarketsNews */

$this->title = 'Update Markets News: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Markets News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="markets-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
