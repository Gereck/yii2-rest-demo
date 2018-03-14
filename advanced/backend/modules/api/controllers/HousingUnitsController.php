<?php

namespace backend\modules\api\controllers;

class HousingUnitsController extends \yii\web\Controller
{
    public function actionHousingUnits()
    {
        return $this->render('housing-units');
    }

}
