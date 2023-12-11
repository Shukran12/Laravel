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
        Schema::create('kategory_mehsul', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mehsul_id')->references('id')->on('mehsul_table')->onDelete('cascade');
            $table->foreignId('kategory_id')->references('id')->on('kategory_table')->onDelete('cascade');

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
        Schema::dropIfExists('kategory_mehsul');
    }
};
