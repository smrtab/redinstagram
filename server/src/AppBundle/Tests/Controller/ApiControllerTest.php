<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'GET /api/girls');
    }

    public function testGetgirl()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'GET /api/girl/{id}');
    }

}
