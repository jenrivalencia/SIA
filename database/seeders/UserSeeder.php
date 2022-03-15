<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrador',
            'username' => 'administrador',
            'email' => 'admin@localhost.com.com',
            'division'=>'DA',
            'zona'=>'15',
            'perfil'=>'1',
            'actividad'=>'7',
            'password' => Hash::make('password')            
        ]);

        $invitado = User::create([
            'name' => 'Invitado',
            'username' => 'invitado',
            'email' => 'invitado@localhost.com.com',
            'division'=>'DA',
            'zona'=>'15',
            'perfil'=>'1',
            'actividad'=>'2',
            'password' => Hash::make('password')
        ]);

        $admin->assignRole('admin');
        $invitado->assignRole('invitado');


    }
}
