<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStandardToMsDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ms_department', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('department_name');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
                $table->foreign('created_by')
                  ->references('id')->on('ms_user')
                  ->onDelete('cascade')->onUpdate('cascade');
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
        //
    }
}
