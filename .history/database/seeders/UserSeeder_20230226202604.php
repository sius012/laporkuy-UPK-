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
            'name' => 'Dionisius Setya Hermawan', 
            'email' => 'dionhermawan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $role = Role::create(['name' => 'Admin']);

        $user->assignRole([$role]);

        $user = User::create([
            'name' => 'Bambang Eko', 
            'email' => 'bambangeko@gmail.com',
            'alamat' => 'Jatijajar',
            'password' => bcrypt('12345678'),
        ]);
      
       $role = Role::create(['name' => 'Petugas']);
       
       
        $user->assignRole([$role]);


        $user = User::create([
            'name' => 'Egy Supratman', 
            'email' => 'egysupratman@gmail.com',
            'alamat' => 'Kebumen',
            'password' => bcrypt('12345678'),
        ]);
      

       
       
        $user->assignRole("Petugas");

        $user = User::create([
            'name' => 'Mamang garox', 
            'email' => 'mamanggarox@gmail.com',
            'alamat' => 'Jatijajar',
            'password' => bcrypt('12345678'),
        ]);

        #this is a command 

        return

       
        $user->assignRole("Petugas");
    }
}
