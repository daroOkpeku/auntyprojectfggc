<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          // formData.append('name', firstname.value)
        // formData.append('lastname', lastname.value)
        // formData.append('email', email.value)
        // formData.append('phone', phone.value)
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('chapter');
            $table->string('set');
            $table->string('house');
            $table->string('t_shirttop');
            $table->string('food_allergies');
            $table->string('medical_conditions');
            // $table->mediumText('verification_code')->nullable();
            // $table->string('user_type')->nullable();
            // $table->boolean('status')->default(0)->nullable();
            // $table->boolean('termsandcondition')->default(0)->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
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
};
