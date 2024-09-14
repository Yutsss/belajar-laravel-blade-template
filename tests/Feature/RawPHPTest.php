<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawPHPTest extends TestCase
{
    public function testRawPHP()
    {
        $this->view('raw-php')
            ->assertSeeText('Yuta');
    }
}
