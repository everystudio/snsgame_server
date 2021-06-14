<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoulumUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('user_profile' , function(Blueprint $table) {
            $table->unsignedInteger('tutorial_progress')->default(0)->after('user_name');
            $table->unsignedInteger('friend_coin')->default(0)->after('user_name');
            $table->unsignedInteger('crystal_free')->default(0)->after('user_name');
            $table->unsignedInteger('crystal')->default(0)->after('user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('user_profile', function(Blueprint $table) {
            $table->dropColumn('tutorial_progress');
            $table->dropColumn('friend_coin');
            $table->dropColumn('crystal_free');
            $table->dropColumn('crystal');

        });
    }
}
