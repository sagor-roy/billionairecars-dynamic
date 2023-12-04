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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->nullable();
            $table->string('username', 100)->unique();
            $table->string('password', 64);
            $table->string('email', 100)->unique();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('address_1', 100)->nullable();
            $table->string('address_2', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('avatar', 100)->nullable();
            $table->tinyInteger('active')->unsigned()->nullable();
            $table->tinyInteger('login_attempt')->default(0);
            $table->datetime('last_login')->nullable();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
            $table->string('reminder', 64)->nullable();
            $table->string('activation', 50)->nullable();
            $table->string('remember_token', 100)->nullable();
            $table->integer('last_activity')->nullable();
            $table->text('config')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
