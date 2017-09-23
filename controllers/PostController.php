<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 20.08.2017
 * Time: 21:44
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            debug(Yii::$app->request->post());
            return 'test';
        }


        $model = new TestForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'ошибка валидации');
            }
        }

        return $this->render('test', compact('model'));

    }

    public function actionShow()
    {
//       $this -> layout = 'basic';
        return $this->render('show');
    }
}
