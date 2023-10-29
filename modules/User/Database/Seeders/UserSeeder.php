<?php

namespace User\Database\Seeders;

use Illuminate\Database\Seeder;
use RolePermission\Models\Role;
use User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'super',
                'last_name' => 'admin',
                'mobile' => '9010335657',
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_SUPER_ADMIN
            ],
            [
                'first_name' => 'patient 1',
                'last_name' => null,
                'mobile' => '9136821808',
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 2',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 3',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 4',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 5',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 6',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 7',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],
            [
                'first_name' => 'patient 8',
                'last_name' => null,
                'mobile' => null,
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_PATIENT
            ],

        ];

        foreach ($users as $user) {
            User::firstOrCreate([
                'mobile' => $user['mobile'],
            ], [
                'mobile' => $user['mobile'] ?? null,
                'first_name' => $user['first_name'],
            ])->assignRole($user['role']);
        }
    }
}
