<?php

namespace Tests\Feature;

use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomEchoTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = 'Yuta';
        $person->address = 'Surabaya';

        $this->view('echo', [
            "person" => $person
        ])->assertSeeText('Yuta: Surabaya');
    }
}
