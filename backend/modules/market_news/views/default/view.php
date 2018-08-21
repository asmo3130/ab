<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\market_news\models\MarketsNews */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Markets News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markets-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'url:ntext',
            'href:ntext',
            'name:ntext',
            'date:ntext',
        ],
    ]) ?>

</div>
