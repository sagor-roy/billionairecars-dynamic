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
        Schema::create('tb_pages', function (Blueprint $table) {
            $table->increments('pageID');
            $table->integer('cid')->nullable();
            $table->string('title')->nullable();
            $table->string('alias')->nullable();
            $table->string('sinopsis', 250)->nullable();
            $table->text('note')->nullable();
            $table->string('filename', 50)->nullable();
            $table->enum('headline', ['1', '0'])->nullable();
            $table->enum('status', ['enable', 'disable'])->default('enable');
            $table->text('access')->nullable();
            $table->enum('allow_guest', ['0', '1'])->default('0');
            $table->enum('template', ['frontend', 'backend'])->default('frontend');
            $table->string('metakey', 255)->nullable();
            $table->text('metadesc')->nullable();
            $table->enum('default', ['0', '1'])->default('0');
            $table->enum('pagetype', ['page', 'post'])->nullable();
            $table->text('labels')->nullable();
            $table->integer('views')->default(0);
            $table->integer('userid')->nullable();
            $table->string('thumbnail', 100)->nullable();
            $table->string('cover', 100)->nullable();
            $table->string('image', 255)->nullable();
            $table->timestamp('updated')->nullable();
            $table->timestamp('created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pages');
    }
};
