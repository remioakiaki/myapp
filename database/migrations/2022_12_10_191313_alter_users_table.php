<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('store_height')->change();
            $table->boolean('store_weight')->change();
            $table->renameColumn('store_height', 'not_store_height');
            $table->renameColumn('store_weight', 'not_store_weight');
            $table->decimal('height', $total = 4, $place = 1)->nullable()->change();
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
            DB::statement('ALTER TABLE `users`
            CHANGE COLUMN `not_store_weight` `store_weight` TINYINT');
            DB::statement('ALTER TABLE `users`
            CHANGE COLUMN `not_store_height` `store_height` TINYINT');
            //$table->renameColumn('not_store_height', 'store_height');
            //$table->renameColumn('not_store_weight', 'store_weight');
        });
    }
}
