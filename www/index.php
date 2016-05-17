<?php

require __DIR__ . '/models/News.php';

$items = News::getAll();

// var_dump($items);

include __DIR__ . '/views/index.php';
