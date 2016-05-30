<?php

// require_once __DIR__ . '/../models/News.php';


class NewsController

{
    public function actionAll() {


        $article = new NewsModel();
        $article->title = 'Привет! 2';
        $article->text = 'Привет, мир! 2';
        $article-> author = 'Олвит';
       $article->insert();




}




}
