<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFaculty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Faculty', function (Blueprint $table) {
            $table->id();
            $table->string('Lastname', 50)->nullable();
            $table->string('Firstname', 50)->nullable();
            $table->string('Middlename', 50)->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Gender', 12)->nullable();
            $table->string('Address', 500)->nullable();
            $table->string('Citizenship', 50)->nullable();
            $table->string('Religion', 50)->nullable();
            $table->string('Subject', 50)->nullable();
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
        Schema::dropIfExists('Faculty');
    }
}
