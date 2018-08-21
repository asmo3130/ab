<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\mazut\models\Mazut */

$this->title = 'Create Mazut';
$this->params['breadcrumbs'][] = ['label' => 'Mazuts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mazut-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
