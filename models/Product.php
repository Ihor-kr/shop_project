<?php


class Product
{
    const SHOW_BY_DEFAULT = 3;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = [];

        $result = $db->query("SELECT product_id, name, price, image_path, is_new FROM products "
        . 'WHERE status = "1"'
        . 'ORDER BY product_id DESC'
        . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch())
        {
            $productsList[$i]['product_id'] = $row['product_id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image_path'] = $row['image_path'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
        }
        return $productsList;
    }

    public static function getProductsListByCategory($categoryId = false)
    {
        if ($categoryId) {
            $db = Db::getConnection();
            $products = [];
            $result = $db->query("SELECT product_id, name, price, image_path, is_new FROM products "
            . "WHERE status = '1' AND category_id = '$categoryId' "
            . "ORDER BY product_id DESC "
            . "LIMIT " . self::SHOW_BY_DEFAULT);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['product_id'] = $row['product_id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image_path'] = $row['image_path'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id) {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM products WHERE product_id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}