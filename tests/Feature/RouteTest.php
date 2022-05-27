<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('\home');

    //     $response->assertStatus(200);
    // }
    public function testRoutes()
    {
        $appURL = env('APP_URL');

        $urls = [
            '/',
            '/login',
            '/search',
            'wears',
            'books',
            'foodie',
            'tech',
            'drugs',
            'adminLogin',
            'AdminDashboard',
            'wearsAdmin',
            'createWear',
            'createTech',
            'createDrug',
            'createBook',
            'createFood'

        ];

        echo  PHP_EOL;

        foreach ($urls as $url) {
            $response = $this->get($url);
            if ((int)$response->status() !== 200) {
                echo  $appURL . $url . ' (FAILED) did not return a 200.';
                $this->assertTrue(false);
            } else {
                echo $appURL . $url . ' (success ?)';
                $this->assertTrue(true);
            }
            echo  PHP_EOL;
        }
    }

}
