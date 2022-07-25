<?php

namespace app\models;

use yii\db\ActiveRecord;

class Url extends ActiveRecord
{

    public static function tableName()
    {
        return 'url';
    }

    public function getCodes()
    {
        return $this->hasMany(UrlCode::classname(), ['url_id' => 'id']);
    }

}
