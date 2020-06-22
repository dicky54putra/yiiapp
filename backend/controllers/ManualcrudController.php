<?php

namespace backend\controllers;

use app\models\Kelass;
use app\models\Student;
use Yii;
use app\models\Students;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\StudentForm;
use yii\helpers\Url;

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
                'only' => ['index', 'detail', 'add'],
                'rules' => [
                    [
                        'actions' => ['index', 'detail', 'add'],
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

    public function actionAdd()
    {
        $form = new StudentForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $request = Yii::$app->request;

            $students = new Student();
            $students->nama = $request->post('StudentForm')['nama'];
            $students->alamat = $request->post('StudentForm')['alamat'];
            $students->tanggal_lahir = $request->post('StudentForm')['tanggal_lahir'];
            $students->id_kelas = $request->post('StudentForm')['id_kelas'];
            $students->save();

            return $this->redirect(Url::to(['manualcrud/index']));
        } else {
            $kelass = Kelass::find()->select(['kelas', 'id_kelas'])->indexBy('id_kelas')->column();
            return $this->render('add', ['forms' => $form, 'kelas' => $kelass]);
        }
    }
}
