<?php
namespace Factory;

use Entity\Article;

class ArticleFactory
{

    public static function create()
    {
        return new Article();
    }
}