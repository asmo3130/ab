<?php

namespace backend\modules\market_news\models;

use Yii;

/**
 * This is the model class for table "markets_news".
 *
 * @property int $id
 * @property string $url
 * @property string $href
 * @property string $name
 * @property string $date
 */
class MarketsNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'markets_news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'href', 'name', 'date'], 'required'],
            [['url', 'href', 'name', 'date'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'href' => 'Href',
            'name' => 'Name',
            'date' => 'Date',
        ];
    }
}
