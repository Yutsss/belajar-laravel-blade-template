<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CssClassTest extends TestCase
{
    public function testHobbies()
    {
        $this->view('css-class', ['hobbies' => [
            [
                'name' => 'gym',
                'love' => true
            ],
            [
                'name' => 'swimming',
                'love' => false
            ],
            [
                'name' => 'coding',
                'love' => true
            ]
        ]])
            ->assertSee('<li class="red bold">gym</li>', false)
            ->assertSee('<li class="red">swimming</li>', false)
            ->assertSee('<li class="red bold">coding</li>', false);
    }
}
