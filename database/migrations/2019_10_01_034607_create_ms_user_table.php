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
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('email')->unique();
            $table->boolean('approved')->default(false);
            $table->rememberToken();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')
            ->references('department_id')->on('ms_department')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->unsignedBigInteger('updated_by')->nullable();
                $table->foreign('updated_by')
                  ->references('id')->on('ms_user')
                  ->onDelete('cascade')->onUpdate('cascade');
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
