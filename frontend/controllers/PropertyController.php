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
          return $this->renderAjax('book');
        }
}
