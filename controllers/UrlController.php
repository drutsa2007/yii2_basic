<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\AddUrlForm;

class UrlController extends Controller
{

    public function actionIndex()
    {
        $model = new AddUrlForm();
        $r = false;
        if($model->load(Yii::$app->request->post()) && $model->add()) {
            $r = true;
        }
        return $this->render('index', ['model' => $model, 'r'=>$r]);
    }

}
