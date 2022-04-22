<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function getGender(){
        $genders = Gender::all();
        return response()->json($genders);
    }

    public function getReportVaccines(){
        $vacunas = DB::select('select u.identification, v.name as vname, vr.dosis, vr.date, u.name, u.phone FROM vaccine_registers vr
        join vaccines v on vr.vaccine_id = v.id
        join users u on u.id = vr.user_id
        order by 1, 3');

        return response()->json($vacunas);
    }


    public function getUsers(){
        $users = User::all();
        return response()->json($users);
    }

    public function getUser($id){
        $user = DB::select('select * from users where identification = ?', [$id]);
        return response()->json($user);
    }

    public function createUsers($data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'identification' => $data['identification'],
            'gender_id' => $data['gender_id'],   
            'address' => $data['address'],
            'phone' => $data['phone'],
            'verified_email' => true,
        ]);
    }

    public function getAppointments(){
        $res = Appointment::all();
        return response()->json($res);
    }
}
