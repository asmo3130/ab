<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\gas_p\models\GasP */

$this->title = 'Create Gas P';
$this->params['breadcrumbs'][] = ['label' => 'Gas Ps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gas-p-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
