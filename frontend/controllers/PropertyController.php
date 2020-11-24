<?php


namespace frontend\controllers;

class PropertyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDetail()
    {
        return $this->render('detail');
    }

        public function actionCaller()
        {
            return $this->renderAjax('caller');
        }

public function actionBook()
{
    $model = new \frontend\models\Listing();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->renderAjax('book', [
        'model' => $model,
    ]);
  }
}
