<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id');
            $table->integer('company_id')->nullable();
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->integer('id_number')->nullable();
            $table->string('socialStatus')->nullable();
            $table->string('points')->nullable();
            $table->string('totalPoints')->nullable();
            $table->string('commercialRecord')->nullable();
            $table->string('commercialActivity')->nullable();
            $table->string('taxNumber')->nullable();
            $table->integer('phone');
            $table->integer('anotherPhone')->nullable();
            $table->string('family_members')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('birthdate')->nullable();
            $table->string('location')->nullable();
            $table->string('password');
            $table->string('city');
            $table->integer('zipcode');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
