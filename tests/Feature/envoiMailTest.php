<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class envoiMailTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function envoiMail()
    {
        $response = $this->put('/api/contact');

        $response->assertOK();
   
    }
}
