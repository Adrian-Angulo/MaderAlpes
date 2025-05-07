<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //crea un usuario administrador con nombre definido
                User::factory()->create([
                    'nombre' => 'Adrian',
                    'apellido' => 'Castillo',
                    'email' => 'adrianangulo1080@gmail.com'
                ])->assignRole('administrador');
        
                //crear usuario de manera aleatoria
                $users = User::factory(10)->create(); 
                foreach ($users as $user ) {
                    $user->assignRole('cliente');
                }
    }
}
