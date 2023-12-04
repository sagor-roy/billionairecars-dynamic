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
        Schema::create('tb_menu', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->integer('parent_id')->default(0);
            $table->string('module', 50)->nullable();
            $table->string('url', 100)->nullable();
            $table->string('menu_name', 100)->nullable();
            $table->char('menu_type', 10)->nullable();
            $table->string('role_id', 100)->nullable();
            $table->smallInteger('deep')->nullable();
            $table->integer('ordering')->nullable();
            $table->enum('position', ['top', 'sidebar', 'both'])->nullable();
            $table->string('menu_icons', 30)->nullable();
            $table->enum('active', [0, 1])->default(1);
            $table->text('access_data')->nullable();
            $table->enum('allow_guest', [0, 1])->default(0);
            $table->text('menu_lang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_menu');
    }
};
