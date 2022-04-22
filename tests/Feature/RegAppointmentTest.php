<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;

class RegAppointmentTest extends TestCase
{
    /** @test */
    public function reg_appointment()
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

        

        $p = Appointment::create([
            'user_id' => $user->id,
            'date' => '2022-04-30 13:46:00',
            'status_id' => '1'
        ]);

        sleep(3); 

        $response = $this->get('api/v1/appointments');
        $response->assertStatus(200);
        $response->assertSee('2022-04-30 13:46:00');

        $p->delete();
    }
}
