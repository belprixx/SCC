<?php

namespace SccBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class userControllerTest extends WebTestCase
{
    public function testHello()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello');
    }

}
