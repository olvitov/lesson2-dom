<?php

// require_once __DIR__ . '/../models/News.php';


class NewsController

{
    public function actionAll()
    {


        $art = NewsModel::findOneByColumn('title', 'Привет CCCR!');


    }
}
