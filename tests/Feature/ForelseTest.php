<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForelseTest extends TestCase
{
//<html>
//<body>
//@forelse($hobbies as $hobby)
//<li>{{ $hobby }}</li>
//@empty
//            <p>Belum ada hobi</p>
//@endforelse
//    </body>
//</html>

    public function testForelse()
    {
        $this->view('forelse-loop', [
            'hobbies' => ['Membaca', 'Olahraga', 'Menulis']
        ])->assertSeeText('Membaca')
            ->assertSeeText('Olahraga')
            ->assertSeeText('Menulis')
            ->assertDontSeeText('Belum ada hobi');

        $this->view('forelse-loop', [
            'hobbies' => []
        ])->assertSeeText('Belum ada hobi');
    }
}
