<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'nombres' => 'Administrador',
            'email' => 'admin@userapp.com.co',
            'password' => bcrypt('12345678'),
            'profile' => 'Administrador',
            'pais_id' => 5,
            'categoria_id' => 3,
        ]);
    }
}
