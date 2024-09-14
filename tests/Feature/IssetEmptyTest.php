<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{

    public function testIsset()
    {
        $this->view('isset-empty', ['name' => 'Yuta'])
            ->assertSee('Hello, Yuta');

        $this->view('isset-empty', ['name' => null])
            ->assertDontSee('Hello, Yuta');

        $this->view('isset-empty', ['name' => ''])
            ->assertDontSee('Hello, Yuta');
    }

    public function testEmpty()
    {
        $this->view('isset-empty', ['hobbies' => ['soccer', 'baseball', 'basketball']])
            ->assertDontSee('No hobbies.');

        $this->view('isset-empty', ['hobbies' => ['soccer']])
            ->assertDontSee('No hobbies.');

        $this->view('isset-empty', ['hobbies' => []])
            ->assertSee('No hobbies.');
    }

}
