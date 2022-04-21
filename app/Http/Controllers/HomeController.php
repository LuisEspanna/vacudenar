<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vaccine;
use App\Models\VaccineRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mckenziearts\Notify\LaravelNotify;

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
        $dosis = count(VaccineRegister::all());

        return view('home', [
            'role' => $user->role_id,
            'usuarios' => $usuarios,
            'estudiantes' => 0,
            'trabajadores' => 0,
            'salud' => 0,
            'citas_pendientes'=> 0,
            'citas_atendidas'=> 0,
            'dosis'=> $dosis
        ]);
    }

    public function vacunasIndex()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $users = User::all();
        $vaccines = Vaccine::all();


        if($user->role_id != 2){
            return view('vacunas', ['vaccines' => $vaccines, 'users' => $users, 'role' => $user->role_id]);
        } else {
            return view('vacunas', ['vaccines' => $vaccines, 'user_id' => $user_id, 'role' => $user->role_id]);
        }
    }

    public function vacunasCreate(Request $request)
    {
        $p = new VaccineRegister();
        $p->vaccine_id = $request->input('vaccine_id');
        $p->date = $request->input('date');
        $p->user_id = $request->input('user_id') ;
        $p->save();

        notify()->success('Dósis registrada con éxito');
        return redirect('/home' );
    }

    public function citasIndex(){
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $users = User::all();
        $vaccines = Vaccine::all();

        // Admin y salud
        if($user->role_id <= 2 ){
            return view('citas', ['vaccines' => $vaccines, 'users' => $users, 'role' => $user->role_id]);
        } else {
            return view('citas', ['vaccines' => $vaccines, 'user_id' => $user_id, 'role' => $user->role_id]);
        }
    }

    public function citasCreate(){
    }

    public function usuarioIndex()
    {
        return view('usuario');
    }
}
