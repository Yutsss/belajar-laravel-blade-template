<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", [
            'users' => [
                [
                    'name' => 'Yuta',
                    'hobbies' => ['Reading', 'Swimming']
                ],
                [
                    'name' => 'Atuy',
                    'hobbies' => ['Writing', 'Cooking']
                ],
                [
                    'name' => 'Yoet',
                    'hobbies' => ['Singing', 'Dancing']
                ]
            ]
        ])->assertSeeInOrder([
            '.red',
            'Yuta',
            'Reading',
            'Swimming',
            'Atuy',
            'Writing',
            'Cooking',
            'Yoet',
            'Singing',
            'Dancing'
        ]);
    }
}
