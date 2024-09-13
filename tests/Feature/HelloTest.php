<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertStatus(200)
            ->assertSee('Hello, Yuta!');
    }

    public function testWorld()
    {
        $this->get('/world')
            ->assertStatus(200)
            ->assertSee('World, Yuta!');
    }

    public function testViewWithoutRoute()
    {
        $this->view('hello', ['name' => 'Yuta'])
            ->assertSee('Hello, Yuta!');
    }

    public function testComment()
    {
        $this->view('comment', ['name' => 'Yuta'])
            ->assertSee('Yuta')
            ->assertDontSee('ini comment');
    }
}
