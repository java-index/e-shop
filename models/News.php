<?php

class News
{
    public static function getNewsById($id)
    {
        $host = 'gvozdyak.mysql.ukraine.com.ua';
        $dbname = 'gvozdyak_eshop';
        $user = 'gvozdyak_eshop';
        $password = 'a8zgf2n4';

        $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
        $result = $db->query('SELECT id, title, date, content FROM news WHERE id = ' . $id);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $result->fetch();
        return  $newsItem;
    }

    public static function getNewsList()
    {
        $host = 'gvozdyak.mysql.ukraine.com.ua';
        $dbname = 'gvozdyak_eshop';
        $user = 'gvozdyak_eshop';
        $password = 'a8zgf2n4';

        $db = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
        $result = $db->query('SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10');

        $newsList = array();
        $i = 0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['id'];
            $i++;
        }

        return $newsList;
    }
}