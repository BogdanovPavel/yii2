<?php
/**
 * Created by PhpStorm.
 * User: bogdanovpa
 * Date: 05.04.2019
 * Time: 12:43
 */

use yii\web\View;

/* @var $this yii\web\View */
/* @var $data string */
/* @var $product \app\models\Product */


echo \yii\widgets\DetailView::widget(['model' => $product]); //$product->name;