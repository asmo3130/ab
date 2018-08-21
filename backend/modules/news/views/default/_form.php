<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\modules\news\models\News */
/* @var $form yii\widgets\ActiveForm */

echo \vova07\imperavi\Widget::widget([
    'selector' => '#news-content',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'imageUpload' => Url::to(['/default/image-upload']),
        'plugins' => [
            'imagemanager',
        ],
    ],
]);
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textInput(['rows' => 6]) ?>

    <?php
    if(!empty($model->image)){
        echo Html::img($model->image, $option = ['class' => 'postImg', 'style' => ['width' => '180px']]);
    }
    ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'prev_text')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['rows' => 6]) ?>

    <?php

    $params = [
        'prompt' => 'Выберите страницу...'
    ];


    $items = [
        'newsbirga' => 'Новости биржи',
        'analitics' => 'Аналитика',
        'marketsnews' => 'Новости рынков',

    ];

    ?>

    <?= $form->field($model, 'parent_page')->dropDownList($items,$params); ?>

    <?= $form->field($model, 'date')->input('date') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
