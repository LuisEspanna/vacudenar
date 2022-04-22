<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getGender(){
        $genders = Gender::all();
        return response()->json($genders);
    }
}
