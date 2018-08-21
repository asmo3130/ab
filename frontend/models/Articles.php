<?php
/**
 * Created by PhpStorm.
 * User: asmo
 * Date: 14.08.18
 * Time: 9:15
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Articles extends ActiveRecord
{
    public static function tableName(){
        return 'articles';
    }
}