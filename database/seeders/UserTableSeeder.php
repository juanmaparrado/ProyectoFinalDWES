<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->name = 'Administrador';
        $admin->email = 'admin@admin.es';
        $admin->password = bcrypt('12345678');
        $admin->save();

        $usuario1 = new User;
        $usuario1->name = 'Juan';
        $usuario1->email = 'juan@example.es';
        $usuario1->password = bcrypt('juanito123');
        $usuario1->save();

        $usuario2 = new User;
        $usuario2->name = 'Marta';
        $usuario2->email = 'marta@gmail.es';
        $usuario2->password = bcrypt('mariquita234');
        $usuario2->save();

        $usuario3 = new User;
        $usuario3->name = 'Pepe';
        $usuario3->email = 'pepe@example.es';
        $usuario3->password = bcrypt('pepitoperez');
        $usuario3->save();

        $usuario4 = new User;
        $usuario4->name = 'Paco';
        $usuario4->email = 'paco@gmail.es';
        $usuario4->password = bcrypt('paquito987');
        $usuario4->save();
    }
}
