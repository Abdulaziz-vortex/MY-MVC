<?php

return [
    'news/([a-z]+)/([0-9]+)' => 'news/full/$1/$2',
    'news/([a-z]+)' => 'news/page/$1',
    'news' => 'news/index',
    'about' => 'about/index',
    'galery/([a-z]+)' => 'galery/type/$1',
    'galery' => 'galery/index',

    '' => 'index/index'
];

?>