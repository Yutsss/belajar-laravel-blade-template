<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testValidationError()
    {
        $errors = [
            'name' => 'The name field is required.',
            'password' => 'The password field is required.'
        ];

        $this->withViewErrors($errors)
            ->view('error', [])
            ->assertSee('The name field is required.')
            ->assertSee('The password field is required.');
    }
}
