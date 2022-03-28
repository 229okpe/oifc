<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

   /* public function test_registration_screen_can_be_rendered()
    {
        $response = $this->post('/api/register');

        $response->assertStatus(200);
    }*/

    public function test_new_users_can_register()
    {
        $response = $this->post('/api/register', [
            'name' => 'Test User',
            'email' => 'akoffodjic@gmail.com',
            'typeUser' => 'Admin',
            'telephone' => '0022996199507',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
      $user= User::all();
       $this->assertAuthenticated();
      $response->assertRedirect(RouteServiceProvider::HOME);
      dd($user);
    }
}
