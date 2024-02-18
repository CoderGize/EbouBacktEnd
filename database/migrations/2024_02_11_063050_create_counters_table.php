<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->integer('number_1');
            $table->integer('number_2');
            $table->integer('number_3');
            $table->integer('number_4');
            $table->string('text_1_en');
            $table->string('text_1_fr');
            $table->string('text_2_en');
            $table->string('text_2_fr');
            $table->string('text_3_en');
            $table->string('text_3_fr');
            $table->string('text_4_en');
            $table->string('text_4_fr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
