<?php

namespace backend\modules\api\controllers;

class HousingUnitsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo 'This is the Housing units controller';
        exit;
        
        return $this->render('index');
    }

}
