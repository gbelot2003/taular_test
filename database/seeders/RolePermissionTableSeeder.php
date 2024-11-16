<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear Roles
        $roles = [
            'administrador',
            'supervisor',
            'maestro',
            'padre',
            'alumno'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // Crear permisos (ejemplo)
        $permissions = [
            'ver dashboard',
            'ver usuarios',
            'crear usuarios',
            'editar usuarios',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Asignar permisos a roles (personaliza según necesidad)
        $admin = Role::findByName('administrador');
        $admin->givePermissionTo(Permission::all());


        // Crear usuarios y asignarles roles
        $users = [
            ['name' => 'Administrador User', 'email' => 'admin@tester', 'role' => 'administrador'],
            ['name' => 'Supervisor User', 'email' => 'supervisor@example.com', 'role' => 'supervisor'],
            ['name' => 'Maestro User', 'email' => 'maestro@example.com', 'role' => 'maestro'],
            ['name' => 'Padre User', 'email' => 'padre@example.com', 'role' => 'padre'],
            ['name' => 'Alumno User', 'email' => 'alumno@example.com', 'role' => 'alumno'],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => bcrypt('password'),
            ]);
            $user->assignRole($userData['role']);
        }

        //$suser = User::findOrFail(51);
        //$suser->assignRole('administrador');
    }
}
