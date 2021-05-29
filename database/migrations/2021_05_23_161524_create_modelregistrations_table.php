<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelregistrations', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("housename");
            $table->string("street");
            $table->string("city");
            $table->string("state");
            $table->string("phno")->unique();
            $table->string("lemail")->unique();
            $table->string("lpassword");
            $table->string("lcpassword");
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
        Schema::dropIfExists('modelregistrations');
    }
}
