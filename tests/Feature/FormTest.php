<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', [
            'user' => [
                'name' => 'Yuta',
                'premium' => true,
                'admin' => true
            ]
        ])->assertSee('checked')
            ->assertSee('Yuta')
            ->assertDontSee('readonly');

        $this->view('form', [
            'user' => [
                'name' => 'Yuta',
                'premium' => false,
                'admin' => false
            ]
        ])->assertDontSee('checked')
            ->assertSee('Yuta')
            ->assertSee('readonly');
    }
}
