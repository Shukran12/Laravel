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
        Schema::create('mehsul_table', function (Blueprint $table) {
            $table->id();
            $table->string('mehsul_ad', 60);
            $table->decimal('qiymet', 3,2);
            $table->text('aciqlama')->nullable();
            $table->boolean('slider')->default(0);
            $table->boolean('furset')->default(0);
            $table->boolean('onecixan')->default(0);
            $table->boolean('coxsatan')->default(0);
            $table->boolean('endirim')->default(0);
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
        Schema::dropIfExists('mehsul_table');
    }
};
