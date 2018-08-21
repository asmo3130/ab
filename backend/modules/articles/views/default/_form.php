<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use backend\modules\main_pages\models\MainPages;

/* @var $this yii\web\View */
/* @var $model backend\modules\articles\models\Articles */
/* @var $form yii\widgets\ActiveForm */


echo \vova07\imperavi\Widget::widget([
    'selector' => '#articles-content',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'imageUpload' => Url::to(['/default/image-upload']),
        'plugins' => [
            'imagemanager',
        ],
    ],
]);


$main = new MainPages();
$names = MainPages::find()->select(['name', 'url'])->all();

?>

<div class="articles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['rows' => 6]) ?>
    <?= $form->field($model, 'url')->textInput(['rows' => 6]) ?>
    <?php

    $params = [
        'prompt' => 'Выберите страницу...'
    ];

    foreach ($names as $name) {
        $keys[] = $name['url'];
        $vals[] = $name['name'];

        $items = array_combine($keys, $vals);
    }

    ?>
    <?= $form->field($model, 'page')->dropDownList($items,$params); ?>

    <?= $form->field($model, 'seo_title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'seo_keywords')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?php
    if(!empty($model->prev_image)){
        echo Html::img($model->prev_image, $option = ['class' => 'postImg', 'style' => ['width' => '180px']]);
    }
    ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'file')->fileInput(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
