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
        Schema::create('cuisine_types', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('restaurant_cuisine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('cuisine_type_id');
            $table->boolean('is_specialty')->default(false);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('restaurant_id')
                  ->references('id')
                  ->on('restaurants')
                  ->onDelete('cascade');

            $table->foreign('cuisine_type_id')
                  ->references('id')
                  ->on('cuisine_types')
                  ->onDelete('cascade');

            // Prevent duplicate entries
            $table->unique(['restaurant_id', 'cuisine_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuisine_types');
        Schema::dropIfExists('restaurant_cuisine');
    }
};
