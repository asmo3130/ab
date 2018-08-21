<?php

namespace backend\modules\articles\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $name
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $content
 * @property string $prev_image
 * @property string $file
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    public $image;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'seo_title', 'seo_description', 'seo_keywords', 'content', 'page', 'url',], 'required'],
            [['name', 'seo_title', 'seo_description', 'seo_keywords', 'content', 'prev_image', 'file', 'page', 'url',], 'string'],
            [['image'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя статьи',
            'page' => 'Родительския страница',
            'url' => 'url',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'content' => 'Контент',
            'prev_image' => 'Картинка превью',
            'file' => 'Файл',
        ];
    }
}
