<?php

class NewsController
{

  public function actionIndex()
  {
    echo 'Список всех новостей';
    return true;
  }

    public function actionView()
    {
        echo 'Одня новость';
        return true;
    }

}
