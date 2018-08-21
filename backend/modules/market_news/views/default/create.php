<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\market_news\models\MarketsNews */

$this->title = 'Create Markets News';
$this->params['breadcrumbs'][] = ['label' => 'Markets News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="markets-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
