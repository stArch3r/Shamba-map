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
      public function actionContact()
  {
      return $this->renderAjax('contact');
  }
}
