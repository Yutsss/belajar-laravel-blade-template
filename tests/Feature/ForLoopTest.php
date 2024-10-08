<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    public function testForLoop()
    {
        $this->view('for-loop')
            ->assertSeeText('0')
            ->assertSeeText('1')
            ->assertSeeText('2')
            ->assertSeeText('3')
            ->assertSeeText('4')
            ->assertSeeText('5')
            ->assertSeeText('6')
            ->assertSeeText('7')
            ->assertSeeText('8')
            ->assertSeeText('9');
    }
}
