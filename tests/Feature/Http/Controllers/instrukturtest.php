<?php

namespace Tests\Feature\Http\controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Instruktur;
use Tests\TestCase;

class instrukturtest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
       $instruktur = Instruktur::create([
        'id_instruktur' => '1805034',
         'nama' =>'Adday',
         'password' => '123456678',
        'no_hp' => '0985543456789',
         'jk' => 'perempuan',
         'foto' => 'aliyah.jpg',
        'alamat' => 'subang',
        'level' => 'instruktur'
       ]);
    
    $this->assertDatabaseHas('instruktur',[
        'id_instruktur' => '1805034',
         'nama' =>'aliyah',
         'password' => '123456678',
        'no_hp' => '0985543456789',
         'jk' => 'perempuan',
         'foto' => 'aliyah.jpg',
        'alamat' => 'subang',
        'level' => 'instruktur'
    ]);
    }
}
