<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\main_pages\models\MainPages */

$this->title = 'Создание страниц';
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
