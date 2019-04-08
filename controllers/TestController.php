<?php

namespace app\controllers;

use app\models\Product;
use yii\web\Controller;

class TestController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $product = new Product();
        $product->id = 1;
        $product->name = 'First';
        $product->price = 1;
        $product->category = 'auto';

        return $this->render('index', [
            'data' => 'Danie',
            'product' => $product
        ]);
    }

}
