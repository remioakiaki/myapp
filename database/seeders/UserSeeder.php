<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 全部消す 　
        DB::table('users')->delete();
        // 開発用のユーザー追加
        User::create([
            'id'              => 1,
            'name'        => 'Akinori',
            'email'           => 'akinori@example.com',
            'password'        => Hash::make('test1234'),
            'height'          => 183,
            'not_store_height' => false,
            'not_store_weight' => false,
            'sex'             => 1,
            'birthday'        => '1991/5/12'
        ]);
        User::create([
            'id'              => 2,
            'name'        => 'Mari',
            'email'           => 'mari@example.com',
            'password'        => Hash::make('test1234'),
            //'height'          => 183,
            'not_store_height' => true,
            'not_store_weight' => true,
            'sex'             => 2,
            'birthday'        => '1997/1/22'
        ]);
        User::create([
            'id'              => 3,
            'name'        => 'Toshihiro',
            'email'           => 'toshihiro@example.com',
            'password'        => Hash::make('test1234'),
            'height'          => 160,
            'not_store_height' => false,
            'not_store_weight' => false,
            'sex'             => 1,
            'birthday'        => '1980/8/20'
        ]);
        User::create([
            'id'              => 4,
            'name'        => 'Akiko',
            'email'           => 'akiko@example.com',
            'password'        => Hash::make('test1234'),
            //'height'          => 160,
            'not_store_height' => true,
            'not_store_weight' => true,
            'sex'             => 2,
            'birthday'        => '1985/10/15'
        ]);
        User::create([
            'id'              => 5,
            'name'        => 'Masahiro',
            'email'           => 'masahiro@example.com',
            'password'        => Hash::make('test1234'),
            'height'          => 180,
            'not_store_height' => false,
            'not_store_weight' => false,
            'sex'             => 1,
            'birthday'        => '1989/1/10'
        ]);
        User::create([
            'id'              => 6,
            'name'        => 'Akiko2',
            'email'           => 'akiko2@example.com',
            'password'        => Hash::make('test1234'),
            //'height'          => 180,
            'not_store_height' => true,
            'not_store_weight' => true,
            'sex'             => 2,
            'birthday'        => '1990/4/3'
        ]);
    }
}
