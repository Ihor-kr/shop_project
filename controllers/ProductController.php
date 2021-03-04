<?php

include_once 'models/Category.php';
include_once 'models/Product.php';

class ProductController
{
    public function actionView($productId) {
        $categories = [];
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);
        require_once 'views/product.php';
        return true;
    }
}