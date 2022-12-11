<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全部消す
        DB::table('records')->delete();
        Record::create([
            'id'       => 1,
            'user_id'  => 1,
            'weight'   => 76.5,
            'bmi'      => 22.84,
            'comment'  => 'まずまず'
        ]);
        Record::create([
            'id'       => 2,
            'user_id'  => 1,
            'weight'   => 76.4,
            'bmi'      => 22.81,
            'comment'  => '痩せた'
        ]);
        Record::create([
            'id'       => 3,
            'user_id'  => 1,
            'weight'   => 77,
            'bmi'      => 22.99,
            'comment'  => '太った'
        ]);
        Record::create([
            'id'       => 4,
            'user_id'  => 2,
            'weight'   => 50.0,
            'bmi'      => 21.8,
            'comment'  => 'このままキープ'
        ]);
        Record::create([
            'id'       => 5,
            'user_id'  => 2,
            'weight'   => 50.2,
            'bmi'      => 21.17,
            'comment'  => '太ってもーてる'
        ]);
        Record::create([
            'id'       => 6,
            'user_id'  => 2,
            'weight'   => 50.4,
            'bmi'      => 21.25,
            'comment'  => '全然痩せへん…'
        ]);
        Record::create([
            'id'       => 7,
            'user_id'  => 3,
            'weight'   => 63,
            'bmi'      => 24.61,
            'comment'  => '食べすぎや…'
        ]);
        Record::create([
            'id'       => 8,
            'user_id'  => 3,
            'weight'   => 63,
            'bmi'      => 24.61,
            'comment'  => '昨日と同じ'
        ]);
        Record::create([
            'id'       => 9,
            'user_id'  => 3,
            'weight'   => 63,
            'bmi'      => 24.61,
            'comment'  => '太ってないぞ〜'
        ]);
        Record::create([
            'id'       => 10,
            'user_id'  => 4,
            'weight'   => 67,
            'bmi'      => 23.74,
            'comment'  => 'お菓子厳禁'
        ]);
        Record::create([
            'id'       => 11,
            'user_id'  => 4,
            'weight'   => 67.3,
            'bmi'      => 23.84,
            'comment'  => '明日からダイエット'
        ]);
        Record::create([
            'id'       => 12,
            'user_id'  => 4,
            'weight'   => 66.9,
            'bmi'      => 23.7,
            'comment'  => '痩せたから今日は食べてよし'
        ]);
        Record::create([
            'id'       => 13,
            'user_id'  => 5,
            'weight'   => 71,
            'bmi'      => 21.91,
            'comment'  => 'ちょい痩せすぎやな〜'
        ]);
        Record::create([
            'id'       => 14,
            'user_id'  => 5,
            'weight'   => 71.3,
            'bmi'      => 22.01,
            'comment'  => 'ぼちぼち'
        ]);
        Record::create([
            'id'       => 15,
            'user_id'  => 5,
            'weight'   => 71.5,
            'bmi'      => 22.07,
            'comment'  => 'まぁ健康やからいいか'
        ]);
        Record::create([
            'id'       => 16,
            'user_id'  => 6,
            'weight'   => 59,
            'bmi'      => 21.94,
            'comment'  => '痩せるぞ〜'
        ]);
        Record::create([
            'id'       => 17,
            'user_id'  => 6,
            'weight'   => 58.8,
            'bmi'      => 21.86,
            'comment'  => '順調！'
        ]);
        Record::create([
            'id'       => 18,
            'user_id'  => 6,
            'weight'   => 58.6,
            'bmi'      => 21.79,
            'comment'  => 'よしよし！！'
        ]);
    }
}
