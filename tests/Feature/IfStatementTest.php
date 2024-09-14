<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    public function testIfStatement()
    {
        $this->view('if-statement',
            ['hobbies' => ['soccer', 'baseball', 'basketball']])
            ->assertSeeText('I have multiple hobbies.');

        $this->view('if-statement',
            ['hobbies' => ['soccer']])
            ->assertSeeText('I have one hobby.');

        $this->view('if-statement',
            ['hobbies' => []])
            ->assertSeeText("I don't have any hobbies.", false);
    }
}
