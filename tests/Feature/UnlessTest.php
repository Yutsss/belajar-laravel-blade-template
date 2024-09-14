<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    public function testUnless()
    {
        $this->view('unless', [
            'isadmin' => true,
        ])->assertDontSeeText('You are not admin');

        $this->view('unless', [
            'isadmin' => false,
        ])->assertSeeText('You are not admin');
    }
}
