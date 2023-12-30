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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the testimonial
            $table->string('slug')->unique(); // Slug of the testimonial
            $table->text('comment'); // Comment of the testimonial
            $table->text('image'); // Image of the testimonial
            // type of the testimonial
            $table->string('type')->default('customer');
            // published status of the testimonial
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
