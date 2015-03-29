<?php
namespace Test\Entity;

use Entity\Article;

class ArticleTest extends \PHPUnit_Framework_TestCase
{

    public function testIsDefParamsAllNull()
    {
        $article = new Article();

        $this->assertNull($article->getId());
        $this->assertNull($article->getTitle());
        $this->assertNull($article->getBody());
    }

    public function testIsSettersWorksPerfectly()
    {
        $article = new Article();
        $article->setId(5);
        $article->setTitle('Title');
        $article->setBody('Content');

        $this->assertEquals(5, $article->getId());
        $this->assertEquals('Title', $article->getTitle());
        $this->assertEquals('Content', $article->getBody());
    }
}