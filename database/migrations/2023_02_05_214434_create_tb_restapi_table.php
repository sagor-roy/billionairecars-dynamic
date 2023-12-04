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
        Schema::create('tb_restapi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apiuser')->nullable();
            $table->string('apikey', 100)->nullable();
            $table->date('created')->nullable();
            $table->text('modules')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_restapi');
    }
};
