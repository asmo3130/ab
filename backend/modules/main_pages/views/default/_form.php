<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\modules\main_pages\models\MainPages */
/* @var $form yii\widgets\ActiveForm */


echo \vova07\imperavi\Widget::widget([
    'selector' => '#mainpages-content',
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

<div class="main-pages-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php

    $params = [
        'prompt' => 'Выберите меню...'
    ];


        $items = [
                'header' => 'Верхнее',
                'body' => 'Основное',
                'left' => 'Левое',

        ];

    ?>

    <?= $form->field($model, 'in_menu')->dropDownList($items,$params); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
