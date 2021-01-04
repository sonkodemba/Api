<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            /**
             * Add this field to the users table
             */
            $table -> bigInteger('gender_id') -> after('designation_id')->unsigned();
            $table -> bigInteger('marital_status_id') -> after('gender_id') -> unsigned();
            $table -> integer('mobile')-> after('marital_status_id') -> unsigned();
            $table -> integer('social_security_num') -> after('mobile') -> unsigned() ->unique();
            $table -> foreign('gender_id') -> references('id')->on('genders')-> onDelete('cascade');
            $table -> foreign('marital_status_id')-> references('id')->on('marital_statuses')->onDelete('cascade');

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
            //
        });
    }
}
