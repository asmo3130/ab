<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 15.08.18
 * Time: 16:59
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return 'news'; // TODO: Change the autogenerated stub
    }
}