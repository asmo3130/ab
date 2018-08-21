<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\bitum\models\Bitum */

$this->title = 'Create Bitum';
$this->params['breadcrumbs'][] = ['label' => 'Bita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bitum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
