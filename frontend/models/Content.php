<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 13.08.18
 * Time: 15:59
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Content extends ActiveRecord
{
    public static function tableName()
    {
        return 'main_pages'; // TODO: Change the autogenerated stub
    }
}