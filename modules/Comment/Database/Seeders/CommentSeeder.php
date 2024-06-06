<?php

namespace Comment\Database\Seeders;

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
                'author_id' => 2,
                'parent_id' => null,
                'text' => 'این یک نظر تست است',
            ],
            [
                'author_id' => 1,
                'parent_id' => 1,
                'text' => 'این یک پاسخ برای نظر تست است'
            ],
            [
                'author_id' => 2,
                'parent_id' => 2,
                'text' => 'این پاسخ به پاسخ نظر تست است'
            ],
            [
                'author_id' => 1,
                'parent_id' => 3,
                'text' => 'این پاسخ به پاسخ پاسخ نظر تست است'
            ],
            [
                'author_id' => 2,
                'parent_id' => 4,
                'text' => 'این اصلا نظر تست نیست'
            ]
        ];

        DB::table('comments')->insert($comments);
    }
}
