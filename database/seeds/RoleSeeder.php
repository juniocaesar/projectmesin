<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'mr_id' => '0',
                'mr_desc' => 'Super Admin',
                'mr_status' => '1',
                'mr_create_user' => 'Super Admin',
                'mr_create_date' => Carbon::now()->toDateTimeString(),
                'mr_update_user' => 'Super Admin',
                'mr_update_date' => Carbon::now()->toDateTimeString(),
            ],
            [
                'mr_id' => '1',
                'mr_desc' => 'Admin Pusat',
                'mr_status' => '1',
                'mr_create_user' => 'Super Admin',
                'mr_create_date' => Carbon::now()->toDateTimeString(),
                'mr_update_user' => 'Super Admin',
                'mr_update_date' => Carbon::now()->toDateTimeString(),
            ],
            [
                'mr_id' => '2',
                'mr_desc' => 'Admin Unit',
                'mr_status' => '1',
                'mr_create_user' => 'Super Admin',
                'mr_create_date' => Carbon::now()->toDateTimeString(),
                'mr_update_user' => 'Super Admin',
                'mr_update_date' => Carbon::now()->toDateTimeString(),
            ],
            [
                'mr_id' => '3',
                'mr_desc' => 'Operator',
                'mr_status' => '1',
                'mr_create_user' => 'Super Admin',
                'mr_create_date' => Carbon::now()->toDateTimeString(),
                'mr_update_user' => 'Super Admin',
                'mr_update_date' => Carbon::now()->toDateTimeString(),
            ],
        ];

        foreach ($roles as $key => $val) {
            Role::create($val);
        }
    }
}
