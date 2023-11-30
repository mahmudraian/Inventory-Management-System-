<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    final public function run(): void
    {
        $admin = [
            'name'     => 'Admin ',
            'email'    => 'raian@raian.com',
            'password' => Hash::make(12345678),
        ];
        $adminUser = (new User())->storeUser($admin);

         $role = Role::query()->where('name', 'admin')->first();
         if ($role){
             $adminUser->roles()->sync($role);
         }
    }
}
