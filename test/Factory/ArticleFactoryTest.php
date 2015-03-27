<?php
namespace Test\Factory;

class ArticleFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreation()
    {
        $article = \Factory\ArticleFactory::create();
        $this->assertInstanceOf('Entity\Article', $article);
    }
}