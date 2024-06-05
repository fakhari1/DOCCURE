<?php

namespace User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
                'id' => Str::uuid(),
                'first_name' => 'مدیریت',
                'last_name' => 'سایت',
                'mobile' => '9123456789',
                'mobile_verified_at' => null,
                'national_code' => null,
                'job' => null,
                'created_at' => '2022-04-22 17:48:28',
                'updated_at' => '2022-04-24 15:38:51',
                'role' => Role::ROLE_SUPER_ADMIN
            ],
//            [
//                'first_name' => 'بیمار 1',
//                'last_name' => null,
//                'mobile' => '9112367891',
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            /*[
//                'first_name' => 'patient 2',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 3',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 4',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 5',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 6',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 7',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],
//            [
//                'first_name' => 'patient 8',
//                'last_name' => null,
//                'mobile' => null,
//                'mobile_verified_at' => null,
//                'national_code' => null,
//                'job' => null,
//                'created_at' => '2022-04-22 17:48:28',
//                'updated_at' => '2022-04-24 15:38:51',
//                'role' => Role::ROLE_PATIENT
//            ],*/
//
        ];
//
        foreach ($users as $user) {
            DB::table('users')->insert([
                'id' => $user['id'],
                'mobile' => $user['mobile'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at']
            ]);

            User::where('mobile', $user['mobile'])->first()->assignRole($user['role']);
        }
    }
}
