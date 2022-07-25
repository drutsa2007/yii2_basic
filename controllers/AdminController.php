<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\Models\Url;
use app\Models\UrlCode;

class AdminController extends Controller
{

    public function actionIndex()
    {
        $data = Url::find()->all();
        return $this->render('index', ['data'=>$data]);
    }

    public function actionCheck($id)
    {
        $data = Url::findOne($id);
        $code=@get_headers($data->url);
        if (empty($code[0])) $code = 'Нет данных';
        /*$record = new UrlCode();
        $record->url_id = $data->id;
        $record->code = $code[0];
        $record->date_check = date('Y-m-d H:i:s');
        $record->save();*/
        $codes = $data->codes;
        return $this->render('check', ['data'=>$data, 'codes'=>$codes, 'code'=>$code]);
    }

    public function actionStart()
    {
        return $this->render('start');
    }

}
