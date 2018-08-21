<?php

namespace backend\modules\news\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $image
 * @property string $content
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }
    public $file;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'image', 'content', 'seo_title', 'seo_description', 'seo_keywords', 'parent_page', 'date', 'prev_text'], 'required'],
            [['name', 'url', 'image', 'content', 'seo_title', 'seo_description', 'seo_keywords','parent_page', 'date', 'prev_text'], 'string'],
            [['file'], 'file']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'image' => 'Image',
            'content' => 'Content',
            'prev_text' => 'prev_text',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'parent_page' => 'Parent page',
            'date' => 'Date',
        ];
    }
}
