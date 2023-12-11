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
        Schema::create('istifadeci_table', function (Blueprint $table) {
            $table->id();
            $table->string('adsoyad', 60);
            $table->string('email', 60);
            $table->string('sifre', 100);
            $table->string('aktiv_kodu', 100)->nullable();
            $table->boolean('aktiv')->default(0);
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
        Schema::dropIfExists('istifadeci_table');
    }
};
