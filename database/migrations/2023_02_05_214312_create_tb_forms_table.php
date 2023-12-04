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
        Schema::create('tb_forms', function (Blueprint $table) {
            $table->increments('formID');
            $table->string('name')->nullable();
            $table->enum('method', ['eav', 'table', 'email'])->default('table');
            $table->string('tablename', 50)->nullable();
            $table->string('email', 225)->nullable();
            $table->longText('configuration')->nullable();
            $table->text('success')->nullable();
            $table->text('failed')->nullable();
            $table->text('redirect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_forms');
    }
};
