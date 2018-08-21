<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\fuel95\models\Fuel95 */

$this->title = 'Create Fuel95';
$this->params['breadcrumbs'][] = ['label' => 'Fuel95s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuel95-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
