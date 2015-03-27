<?php
namespace TravisLearn\Test\Factory;



class ArticleFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreation()
    {
        $article = \TravisLearn\Factory\ArticleFactory::create();
        $this->assertInstanceOf('TravisLearn\Entity\Article', $article);
    }
}