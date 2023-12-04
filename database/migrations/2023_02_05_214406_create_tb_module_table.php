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
        Schema::create('tb_module', function (Blueprint $table) {
            $table->increments('module_id');
            $table->string('module_name', 100)->nullable();
            $table->string('module_title', 100)->nullable();
            $table->string('module_note', 255)->nullable();
            $table->string('module_author', 100)->nullable();
            $table->timestamp('module_created')->nullable();
            $table->text('module_desc');
            $table->string('module_db', 255)->nullable();
            $table->string('module_db_key', 100)->nullable();
            $table->char('module_type', 20)->default('native');
            $table->longText('module_config');
            $table->text('module_lang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_module');
    }
};
