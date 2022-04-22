<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Gender;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\VaccineRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mckenziearts\Notify\LaravelNotify;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

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
        
        if($user->role_id <= 2){
            $usuarios = count(User::all());
            $dosis = count(VaccineRegister::all());
            $salud = DB::table('users')->where('role_id', '=', 2)->get()->count();
            $estudiantes = DB::table('users')->where('role_id', '=', 3)->get()->count();
            $empleados = DB::table('users')->where('role_id', '=', 4)->get()->count();
            $profesores = DB::table('users')->where('role_id', '=', 5)->get()->count();
            $citas_pendientes = DB::table('appointments')->where('status_id', '=', 1)->get()->count();
            $citas_atendidas = DB::table('appointments')->where('status_id', '=', 2)->get()->count();

            $results = DB::select('select v.name, count(month(vc.date)) total, month(vc.date) as mes
            from vaccine_registers vc join vaccines v 
            on vc.vaccine_id = v.id
            where year(vc.date) >= year(curdate())
            group by v.name, vc.date');

            return view('admin.admin', [
                'role' => $user->role_id,
                'usuarios' => $usuarios,
                'estudiantes' =>$estudiantes,
                'empleados' => $empleados,
                'salud' => $salud,
                'profesores' => $profesores,
                'citas_pendientes'=> $citas_pendientes,
                'citas_atendidas'=> $citas_atendidas,
                'dosis'=> $dosis,
                'results' => json_encode($results)
            ]);
        } else {
            $dosis = DB::table('vaccine_registers')->where('user_id', '=', $user_id)->get()->count();
            
            $citas_pendientes = DB::select('select count(*) as total from appointments
            where user_id = ? and status_id = 1', [$user_id]);

            $citas_atendidas = DB::select('select count(*) as total from appointments
            where user_id = ? and status_id = 2', [$user_id]);

            return view('others.others', [
                'role' => $user->role_id,
                'citas_pendientes'=> $citas_pendientes[0],
                'citas_atendidas'=> $citas_pendientes[0],
                'dosis'=> $dosis,
                'id'=> $user_id
            ]);
        }
    }

    public function vacunasIndex()
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $users = User::all();
        $vaccines = Vaccine::all();


        if($user->role_id < 2){
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
        $p->dosis = $request->input('dosis');
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

    public function citasCreate(Request $request){
        $p = new Appointment();
        $p->user_id = $request->input('vaccine_id');
        $p->date = $request->input('date');
        $p->status_id = $request->input('status_id');
        $p->save();

        notify()->success('Cita registrada con éxito');
        return redirect('/home' );
    }

    public function reporteVacunas($id){
        $vacunas = DB::select('select v.name, vr.dosis, vr.date from vaccine_registers vr
            join vaccines v on vr.vaccine_id = v.id where user_id = ?
            order by 2', [$id]);

        return view('reports.vaccine', ['vacunas'=> $vacunas, 'details' => false]);
    }

    public function allVacunas(){
        $vacunas = DB::select('select u.identification, v.name as vname, vr.dosis, vr.date, u.name, u.phone FROM vaccine_registers vr
        join vaccines v on vr.vaccine_id = v.id
        join users u on u.id = vr.user_id
        order by 1, 3');

        return view('reports.vaccine', ['vacunas'=> $vacunas, 'details' => true]);
    }
}
