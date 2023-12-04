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
        Schema::create('tb_logs', function (Blueprint $table) {
            $table->increments('auditID');
            $table->string('ipaddress', 50)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('module', 50)->nullable();
            $table->string('task', 50)->nullable();
            $table->text('note')->nullable();
            $table->timestamp('logdate')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_logs');
    }
};
