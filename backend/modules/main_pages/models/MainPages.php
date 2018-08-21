<?php

namespace backend\modules\main_pages\models;

use Yii;

/**
 * This is the model class for table "main_pages".
 *
 * @property int $id
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property string $content
 */
class MainPages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main_pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seo_title', 'seo_description', 'seo_keywords', 'content', 'in_menu',], 'required'],
            [['seo_title', 'seo_description', 'seo_keywords', 'content', 'name', 'url','in_menu',], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'seo_title' => 'Сео Тайтл',
            'seo_description' => 'Сео Дескрипшн',
            'seo_keywords' => 'Сео Кейвордс',
            'content' => 'Контент страници',
            'name' => 'Имя',
            'in_menu' => 'Вывод в меню',
            'url' => 'Url',
        ];
    }
}
