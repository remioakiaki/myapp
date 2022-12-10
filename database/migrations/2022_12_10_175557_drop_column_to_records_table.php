<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnToRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('records', function (Blueprint $table) {
            Schema::table('records', function (Blueprint $table) {
                $table->dropForeign('records_group_id_foreign');
                $table->dropColumn('group_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('records', function (Blueprint $table) {
            Schema::table('records', function (Blueprint $table) {
                $table->foreignId('group_id')->after('user_id')->constrained()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            });
        });
    }
}
