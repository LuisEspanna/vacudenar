<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $usuarios = count(User::all());


        return view('home', [
            'role' => $user->role_id,
            'usuarios' => $usuarios,
            'estudiantes' => 0,
            'trabajadores' => 0,
            'salud' => 0
        ]);
    }

    public function vacunas()
    {
        return view('vacunas');
    }

    public function citas()
    {
        return view('citas');
    }

    public function usuario()
    {
        return view('usuario');
    }
}
