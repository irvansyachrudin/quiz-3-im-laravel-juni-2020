<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('followers', function (Blueprint $table) {
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
        Schema::table('followers', function (Blueprint $table) {
            Schema::table('followers', function (Blueprint $table) {
                $table->dropForeign('followers_user_id_foreign');
            });

            Schema::table('followers', function (Blueprint $table) {
                $table->dropIndex('followers_user_id_foreign');
            });

            Schema::table('followers', function (Blueprint $table) {
                $table->integer('user_id')->change();
            });
        });
    }
}
