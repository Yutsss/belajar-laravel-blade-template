<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchCaseTest extends TestCase
{
    public function testSwitchCase()
    {
        $this->view('switch-case', [
            'value' => 'A',
        ])->assertSeeText("Memuaskan");

        $this->view('switch-case', [
            'value' => 'B',
        ])->assertSeeText("Baik");

        $this->view('switch-case', [
            'value' => 'C',
        ])->assertSeeText("Cukup");

        $this->view('switch-case', [
            'value' => 'D',
        ])->assertSeeText("Kurang");

        $this->view('switch-case', [
            'value' => 'E',
        ])->assertSeeText("Gagal");
    }
}
