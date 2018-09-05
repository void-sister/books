<?php

namespace Tests\Feature\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_a_login_form()
    {
      $response = $this->get('/login');
      $response->assertSuccessful();
      $response->assertViewIs('auth.login');
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
      $user = factory(User::class)->make();
      $response = $this->actingAs($user)->get('/login');
      $response->assertRedirect('/dashboard');
    }

    public function test_user_can_login_with_correct_credentials()
    {
      $user = factory(User::class)->create([
          'password' => bcrypt($password = 'pass-word'),
      ]);
      $response = $this->post('/login', [
          'email' => $user->email,
          'password' => $password,
      ]);
      $response->assertRedirect('/dashboard');
      $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_incorrect_password()
    {
      $user = factory(User::class)->create([
          'password' => bcrypt('right-password'),
      ]);

      $response = $this->from('/login')->post('/login', [
          'email' => $user->email,
          'password' => 'invalid-password',
      ]);

      $response->assertRedirect('/login');
      $response->assertSessionHasErrors('email');
      $this->assertTrue(session()->hasOldInput('email'));
      $this->assertFalse(session()->hasOldInput('password'));
      $this->assertGuest();
    }

}
