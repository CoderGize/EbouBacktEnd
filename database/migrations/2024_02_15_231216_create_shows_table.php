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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('partner_sh')->default(1);
            $table->string('testimonial_sh')->default(1);
            $table->string('portfolio_sh')->default(1);
            $table->string('blog_sh')->default(1);
            $table->string('team_sh')->default(1);
            $table->string('faq_sh')->default(1);
            $table->string('counter_sh')->default(1);
            $table->string('brandee_sh')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
