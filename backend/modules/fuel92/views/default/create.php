<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\fuel92\models\Fuel92 */

$this->title = 'Create Fuel92';
$this->params['breadcrumbs'][] = ['label' => 'Fuel92s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuel92-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
