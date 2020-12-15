<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchoolHandphoneClassToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char("school")->after('email');
            $table->char("phone")->after('school');;
            $table->unsignedBigInteger('kelas_id')->after('phone');
            $table->foreign('kelas_id')->references('id')->on('kelas');
            $table->unsignedBigInteger('kelas2_id')->after('kelas_id');
            $table->foreign('kelas2_id')->references('id')->on('kelas');
            $table->char('role')->after('kelas2_id');
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
