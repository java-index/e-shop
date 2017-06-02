<?php

include_once ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newList = array();
        $newList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }

    public function actionView($category, $id)
    {
        echo $category, '  ', $id;
        return true;
    }

}
