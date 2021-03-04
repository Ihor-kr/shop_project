<?php

include_once 'models/Category.php';
include_once 'models/Product.php';

class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatestProducts(6);

        require_once 'views/catalog.php';
        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId);

        require_once 'views/catalog.php';
        return true;
    }
}