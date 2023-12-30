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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the product
            $table->string('slug')->unique(); // Slug of the product
            $table->text('description')->nullable(); // Description of the product
            $table->text('image'); // Image of the product
            $table->string('price'); // Price of the product
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('year'); // Manufacturing year of the product
            $table->string('transmission'); // Transmission of the product
            $table->string('mileage'); // Mileage of the product
            $table->string('fuel'); // Fuel of the product
            $table->string('engine'); // Engine of the product
            $table->boolean('is_available')->default(true);
            $table->boolean('published')->default(false);
            $table->string('badge')->nullable();
            $table->foreignId('emission_id')->constrained()->onDelete('cascade');
            $table->foreignId('body_work_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
