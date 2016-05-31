<?php

// require_once __DIR__ . '/../models/News.php';


class NewsController

{
    public function actionAll() {

        $art = NewsModel::findOneByColumn('title', 'Привет CCCR!');
        $art->title ='Спокойной ночи малыши 1234';

        $art->save();

        var_dump($art->id);
}




}
