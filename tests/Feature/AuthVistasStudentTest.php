<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthVistasStudentTest extends TestCase
{
    /** @test */
    public function views_students_auth()
    {
        $userTodelete = DB::statement('delete from users where identification = 1085320421');

        $user = User::create([
            'name' => 'test',
            'email' => 'test1@gmail.com',
            'password' => '123',
            'role_id' => 3,
            'identification' => 1085320421,
            'gender_id' => 1,   
            'address' => 'Mz B Casa 30 STA Monica',
            'phone' => '3183844053',
            'verified_email' => true,
        ]);

        sleep(3); 

        $response = $this->get('api/v1/users/1085320421');
        $response->assertStatus(200);
        $response->assertSee('1085320421');

        $this->actingAs($user);

        $response = $this->get(route('vacunas'));
        $response->assertStatus(200);

        $response = $this->get(route('citas'));
        $response->assertStatus(200);
        }
}
