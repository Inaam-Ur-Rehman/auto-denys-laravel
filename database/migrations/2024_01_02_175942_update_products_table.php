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
        Schema::table('products', function (Blueprint $table) {
            $table->string('horsepower')->nullable()->after('price');
            //kws
            $table->string('kws')->nullable()->after('horsepower');
            // cylinder capacity
            $table->string('cylinder_capacity')->nullable()->after('kws');
            $table->string('co')->nullable()->after('cylinder_capacity');
            // interior color and exterior color
            $table->string('interior_color')->nullable()->after('co');
            $table->string('exterior_color')->nullable()->after('interior_color');
            // location
            $table->string('location')->nullable()->after('exterior_color');

            // options
            $table->text('options')->nullable()->after('location');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'horsepower',
                'kws',
                'cylinder_capacity',
                'co',
                'interior_color',
                'exterior_color',
                'location',
                'options',
            ]);
        });
    }
};
