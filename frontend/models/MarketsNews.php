<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 16.08.18
 * Time: 9:59
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class MarketsNews extends ActiveRecord
{
    public static function tableName()
    {
        return 'markets_news'; // TODO: Change the autogenerated stub
    }
}