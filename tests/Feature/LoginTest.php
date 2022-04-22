<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    /** @test */
    public function login_displays_the_login_form_and_respect_the_sessions()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
        $response->assertSee('Forgot Your Password?');

        $response = $this->get(route('vacunas'));
        $response->assertStatus(302);
    }
}
