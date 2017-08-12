<?php

namespace SymfonyCebu\PagesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoriesControllerTest extends WebTestCase
{
    public function testInsert()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pages/categories/insert');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pages/categories/list');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pages/categories/show/{slug}');
    }

    public function testUpdate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/pages/categories/update/{id}');
    }

}
