<?php
namespace TravisLearn\Factory;

use TravisLearn\Entity\Article;

class ArticleFactory
{
    public static function create()
    {
        return new Article();
    }
}