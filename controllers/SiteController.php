<?php

include_once 'models/Category.php';
include_once 'models/Product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(3);

        require_once 'views/index.php';
        return true;
    }
}