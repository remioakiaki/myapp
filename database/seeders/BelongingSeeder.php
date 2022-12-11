<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Belonging;

class BelongingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全部消す
        DB::table('belonging')->delete();
        Belonging::create([
            'id'       => 1,
            'user_id'  => 1,
            'group_id'  => 1,
        ]);
        Belonging::create([
            'id'       => 2,
            'user_id'  => 2,
            'group_id'  => 1,
        ]);
        Belonging::create([
            'id'       => 3,
            'user_id'  => 3,
            'group_id'  => 1,
        ]);
        Belonging::create([
            'id'       => 4,
            'user_id'  => 4,
            'group_id'  => 1,
        ]);
        Belonging::create([
            'id'       => 5,
            'user_id'  => 5,
            'group_id'  => 1,
        ]);
        Belonging::create([
            'id'       => 6,
            'user_id'  => 1,
            'group_id'  => 2,
        ]);
        Belonging::create([
            'id'       => 7,
            'user_id'  => 2,
            'group_id'  => 2,
        ]);
        Belonging::create([
            'id'       => 8,
            'user_id'  => 5,
            'group_id'  => 2,
        ]);
        Belonging::create([
            'id'       => 9,
            'user_id'  => 6,
            'group_id'  => 2,
        ]);
    }
}
