<?php

namespace backend\controllers;

use app\models\Students;
use yii\filters\AccessControl;
use yii\web\Controller;

class ManualcrudController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'use yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index',],
                'rules' => [
                    [
                        'actions' => ['index',],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Students::find();
        $students = $query->orderBY('id')->all();

        return $this->render('index', ['students' => $students]);
    }

    public function actionDetail($id)
    {
        $students = Students::findOne(['id' => $id]);
        return $this->render('detail', ['students' => $students]);
    }
}
