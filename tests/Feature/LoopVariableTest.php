<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function testLoopVariable()
    {
        $this->view('loop-variable', [
            'hobbies' => ['reading', 'swimming', 'running']
        ])->assertSeeText('1. reading')
            ->assertSeeText('2. swimming')
            ->assertSeeText('3. running');
    }
}
