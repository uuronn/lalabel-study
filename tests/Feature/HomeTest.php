<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/'); // アクセス結果が$responseに格納される。

    //     $response->assertStatus(200); // HTTPステータスコードが200であることを検証する。
    // }

    public function testStatusCode()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }
    
    public function testBody()
    {
        $response = $this->get('/home');
        $response->assertSeeText('こんにちは！');
    }
}
