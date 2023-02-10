<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Dionisius', 
            'email' => 'deon@gmail.com',
            'password' => bcrypt('12345678')
        ]);
      
       $role = Role::create(['name' => 'Admin']);
       
       
        $user->assignRole([$role]);
    }
}
