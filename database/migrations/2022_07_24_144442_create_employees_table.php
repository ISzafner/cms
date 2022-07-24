<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('description')->nullable();
            $table->string('testingSystems')->nullable();
            $table->string('reportingSystems')->nullable();
            $table->tinyInteger('selenium')->nullable();
            $table->string('ide')->nullable();
            $table->string('programmingLanguages')->nullable();
            $table->tinyInteger('mysql')->nullable();
            $table->string('projectManagementMethodologies')->nullable();
            $table->tinyInteger('scrum')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
