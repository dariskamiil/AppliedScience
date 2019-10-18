<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('email')->unique();
            $table->boolean('verified')->default(0);
            $table->rememberToken();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
            ->references('department_id')->on('ms_department')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_user');
    }
}
