<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArmadaTest extends TestCase
{
    /**
     * Test to get all armada.
     *
     * @return void
     */
    public function test_can_get_all_armadas()
    {
        // Hit API endpoint
        $response = $this->getJson('/api/armada');

        // Cek status respons
        $response->assertStatus(200);

        // Cek apakah data yang dikembalikan sesuai
        $response->assertJsonStructure([
            'success',
            'message',
            'data' => [
                '*' => [
                    'unit',
                    'no_hp',
                    'status'
                ]
            ]
        ]);
    }
}
