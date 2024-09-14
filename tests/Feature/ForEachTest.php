<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForEachTest extends TestCase
{
    public function testForeach()
    {
        $this->view('foreach-loop', [
            'hobbies' => ['reading', 'swimming', 'watching movies']
        ])->assertSeeText('reading')
            ->assertSeeText('swimming')
            ->assertSeeText('watching movies');
    }
}
