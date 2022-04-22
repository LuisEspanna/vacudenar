<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\VaccineRegister;
use Illuminate\Support\Facades\DB;

class RegVaccineTest extends TestCase
{
    /** @test */
    public function reg_vaccine()
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

        $p = VaccineRegister::create([
            'vaccine_id' => 1,
            'date' => '2000-04-30',
            'dosis' => 1,
            'user_id' => $user->id
        ]);

        sleep(3); 

        $response = $this->get('api/v1/vaccines');
        $response->assertStatus(200);
        $response->assertSee('2000-04-30');

        $p->delete();
    }
}
