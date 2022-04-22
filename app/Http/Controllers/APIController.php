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

    public function getAppointments(){
        $res = Appointment::all();
        return response()->json($res);
    }
}
