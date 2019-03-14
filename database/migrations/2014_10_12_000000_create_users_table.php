<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 64);
            $table->string('last_name', 64);
            $table->string('email')->unique();
            $table->string('password', 96);
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('role')->default('sales_person');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
