<?php

namespace Comment\Database\Seeders;

use Comment\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RolePermission\Models\Role;
use User\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'author_id' => User::query()->whereHas('roles', function ($builder) {
                    return $builder->where('name', Role::ROLE_PATIENT);
                })->first()->id,
                'parent_id' => null,
                'text' => 'این یک نظر تست است',
                'status' => Comment::STATUS_PENDING
            ],
            [
                'author_id' => User::query()->whereHas('roles', function ($builder) {
                    return $builder->where('name', Role::ROLE_SUPER_ADMIN);
                })->first()->id,
                'parent_id' => 1,
                'text' => 'این یک پاسخ برای نظر تست است',
                'status' => Comment::STATUS_PENDING
            ],
            [
                'author_id' => User::query()->whereHas('roles', function ($builder) {
                    return $builder->where('name', Role::ROLE_PATIENT);
                })->first()->id,
                'parent_id' => 2,
                'text' => 'این پاسخ به پاسخ نظر تست است',
                'status' => Comment::STATUS_PENDING
            ],
            [
                'author_id' => User::query()->whereHas('roles', function ($builder) {
                    return $builder->where('name', Role::ROLE_SUPER_ADMIN);
                })->first()->id,
                'parent_id' => 3,
                'text' => 'این پاسخ به پاسخ پاسخ نظر تست است',
                'status' => Comment::STATUS_PENDING
            ],
            [
                'author_id' => User::query()->whereHas('roles', function ($builder) {
                    return $builder->where('name', Role::ROLE_PATIENT);
                })->first()->id,
                'parent_id' => 4,
                'text' => 'این اصلا نظر تست نیست',
                'status' => Comment::STATUS_PENDING
            ]
        ];

        DB::table('comments')->insert($comments);
    }
}
