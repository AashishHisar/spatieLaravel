<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserIndex extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data=['name'=>"Admin","email"=>"admin@gmail.com","password"=>Hash::make("123456789")];
        $user=User::create($data);
        //Here we are also create multiple role and adjust as a name to user 
        $role = Role::create(['name' => 'Admin']);
        //here we are create mutiple permissions to one role
        $permission1 = Permission::create(['name' => 'edit users']);
        $permission2 = Permission::create(['name' => 'delete users']);
        $role->givePermissionTo([$permission1, $permission2]);
        $user->assignRole('Admin');

    }
}
