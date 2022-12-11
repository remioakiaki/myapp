<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全部消す
        DB::table('groups')->delete();
        Group::create([
            'id'       => 1,
            'user_id'  => 1,
            'name'     => '家族'
        ]);
        Group::create([
            'id'       => 2,
            'user_id'  => 6,
            'name'     => '若い世代'
        ]);
    }
}
