<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 画像を追加していなくても初期画像を設定できるようにするため、
        // usersのimageにデフォルトの値を追加
        // あわせて、間違えてdate型にしてしまっていたので、
        // stringに変更
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->change();
            $table->string('image')->default('default_user_image.jpg')->change();
        });
        // テーブル定義書と差異があったため、
        // NULL許可を追加
        Schema::table('records', function (Blueprint $table) {
            $table->string('comment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('image')->change();
        });

        Schema::table('records', function (Blueprint $table) {
            $table->string('comment')->change();
        });
    }
}
