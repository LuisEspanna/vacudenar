<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        self::seedUsers();   
    }


    public function seedUsers() {
        return User::create([
            'name' => 'luis',
            'email' => 'fdh.luis.angel@gmail.com',
            'password' => bcrypt('123'),
        ]);
            

        $this->command->info('Tabla users inicializada con datos!');
    }
}
