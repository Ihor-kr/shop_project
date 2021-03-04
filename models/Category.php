<?php


class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();

        $categoryList = [];
        $result = $db->query('SELECT category_id, name FROM category'
        . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch())
        {
            $categoryList[$i]['category_id'] = $row['category_id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}