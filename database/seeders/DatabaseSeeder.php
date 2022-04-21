<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        //$this->call(GruposTableSeeder::class);
        self::seedStatus();
        self::seedGenders();
        self::seedRoles();
        self::seedVaccine();
        self::seedUsers();   
    }


    public function seedUsers() {
        /*
            $table->boolean('verified_email');
        */
        return User::create([
            'name' => 'luis',
            'email' => 'fdh.luis.angel@gmail.com',
            'password' => bcrypt('123'),
            'role_id' => 1,
            'identification' => 1085320429,
            'gender_id' => 1,   
            'address' => 'Mz B Casa 30 STA Monica',
            'phone' => '3183844053',
            'verified_email' => true,
        ]);
            

        $this->command->info('Tabla users inicializada con datos!');
    }

    public function seedStatus() {
        Status::create([
            'name' => 'activa'
        ]);

        Status::create([
            'name' => 'pausada'
        ]);

        Status::create([
            'name' => 'cancelada'
        ]);
            
        return;
        $this->command->info('Tabla estados inicializada con datos!');
    }

    public function seedGenders() {
        Gender::create([
            'name' => 'Masculino'
        ]);

        Gender::create([
            'name' => 'Femenino'
        ]);
            
        return;
        $this->command->info('Tabla generos inicializada con datos!');
    }

    public function seedRoles() {
        Role::create([
            'name' => 'Administrador',
            'description' => 'Acceso total al sistema',
        ]);

        Role::create([
            'name' => 'Estudiante',
            'description' => 'Acceso personal',
        ]);

        Role::create([
            'name' => 'Empleado',
            'description' => 'Acceso personal',
        ]);

        Role::create([
            'name' => 'Salud',
            'description' => 'Acceso para generar reportes',
        ]);
            
        return;
        $this->command->info('Tabla roles inicializada con datos!');
    }

    public function seedVaccine() {
        Vaccine::create([
            'name' => 'Pfizer'
        ]);

        Vaccine::create([
            'name' => 'Moderna'
        ]);

        Vaccine::create([
            'name' => 'Astrazeneca'
        ]);

        Vaccine::create([
            'name' => 'Jenssen'
        ]);

        Vaccine::create([
            'name' => 'GSK'
        ]);

        Vaccine::create([
            'name' => 'Novamax'
        ]);

        Vaccine::create([
            'name' => 'Curevac'
        ]);
            
        return;
        $this->command->info('Tabla vacunas inicializada con datos!');
    }
}