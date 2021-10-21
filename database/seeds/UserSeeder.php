<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
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
        //
        $user = [
            [
                'username' => 'superadmin',
                'name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('superadmin'),
                'role_id' => '0',
                'region_id' => 'RG0017',
                'status_data' => '1',
            ],
            [
                'username' => 'adminpusat',
                'name' => 'Admin',
                'last_name' => 'Pusat',
                'email' => 'adminpusat@example.com',
                'password' => bcrypt('adminpusat'),
                'role_id' => '1',
                'region_id' => 'RG0017',
                'status_data' => '1',
            ],
            [
                'username' => 'adminunit',
                'name' => 'Admin',
                'last_name' => 'Unit',
                'email' => 'adminunit@example.com',
                'password' => bcrypt('adminunit'),
                'role_id' => '2',
                'region_id' => 'RG0017',
                'status_data' => '1',
            ],
            [
                'username' => 'operator',
                'name' => 'Operator',
                'last_name' => 'Mesin',
                'email' => 'operator@example.com',
                'password' => bcrypt('operator'),
                'role_id' => '3',
                'region_id' => 'RG0017',
                'status_data' => '1',
            ],
        ];

        foreach ($user as $key => $val) {
            User::create($val);
        }
    }
}
