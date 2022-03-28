<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class coursFunctionsTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function getListeCours()
    {
        $response = $this->get('/api/cours');

        $response->assertStatus(200);

        dd($response->json());
    }
}
