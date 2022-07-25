<?php

namespace app\models;

use Yii;
use yii\base\Model;

class AddUrlForm extends Model
{
    public $url;
    public $frequency;
    public $repeat;

    public function rules()
    {
        return [
            [['url', 'frequency', 'repeat'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'url' => 'URL - адрес',
            'frequency' => 'Частота проверки',
            'repeat' => 'Количество повторов',
        ];
    } 

    public function add()
    {
        if ($this->validate()) {
            $record = new Url();
            $record->url = $this->url;
            $record->frequency = $this->frequency;
            $record->repeat = $this->repeat;
            $record->date_add = date('Y-m-d H:i:s');
            $record->save();
            return true;
        }
        return false;
    }

}
