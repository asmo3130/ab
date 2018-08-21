<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\gas_s\models\GasS */

$this->title = 'Create Gas S';
$this->params['breadcrumbs'][] = ['label' => 'Gas Ss', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gas-s-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
