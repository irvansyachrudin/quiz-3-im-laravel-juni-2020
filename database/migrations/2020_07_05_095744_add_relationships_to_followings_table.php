<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToFollowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('followings', function (Blueprint $table) {
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
        Schema::table('followings', function (Blueprint $table) {
            Schema::table('followings', function (Blueprint $table) {
                $table->dropForeign('followings_user_id_foreign');
            });

            Schema::table('followings', function (Blueprint $table) {
                $table->dropIndex('followings_user_id_foreign');
            });

            Schema::table('followings', function (Blueprint $table) {
                $table->integer('user_id')->change();
            });
        });
    }
}
