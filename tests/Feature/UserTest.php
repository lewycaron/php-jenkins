<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $json = [
            'nome' => 'Usuario Teste',
            'email' => 'usuarioteste@gmail.com'
        ];

        $response = $this->post('/usuario', $json);

        $response->assertJsonStructure([
            'nome',
            'email'
        ]);

        $response->assertStatus(201);
    }
}
