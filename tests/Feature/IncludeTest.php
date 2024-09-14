<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view('include', [
            'title' => 'Yoet'
        ])->assertSeeText('Yoet')
            ->assertSeeText('Selamat datang di web');

        $this->view('include')
            ->assertSeeText('Yutsss')
            ->assertSeeText('Selamat datang di web');
    }

    public function testIncludeWhen()
    {
        $this->view('include-condition', [
            'user' => [
                'name' => 'Yoet',
                'owner' => true
            ]
        ])->assertSeeText('Selamat datang owner');

        $this->view('include-condition', [
            'user' => [
                'name' => 'Atuy',
                'owner' => false
            ]
        ])->assertDontSeeText('Selamat datang owner');
    }
}
