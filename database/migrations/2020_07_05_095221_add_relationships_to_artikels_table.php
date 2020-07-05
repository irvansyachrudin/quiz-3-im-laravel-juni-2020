<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToartikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->change();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikels', function (Blueprint $table) {
            Schema::table('artikels', function (Blueprint $table) {
                $table->dropForeign('artikels_user_id_foreign');
            });

            Schema::table('artikels', function (Blueprint $table) {
                $table->dropIndex('artikels_user_id_foreign');
            });

            Schema::table('artikels', function (Blueprint $table) {
                $table->integer('user_id')->change();
            });
        });
    }
}
