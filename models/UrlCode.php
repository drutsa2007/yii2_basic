<?php

namespace app\models;

use yii\db\ActiveRecord;

class UrlCode extends ActiveRecord
{

    public static function tableName()
    {
        return 'code';
    }

}
