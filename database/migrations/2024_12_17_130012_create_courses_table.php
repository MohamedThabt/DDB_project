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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();// Primary key
            $table->string('name', 255); // Course name (max 255 characters)
            $table->text('description')->nullable(); // Optional detailed description
            $table->unsignedSmallInteger('duration')->nullable(); // Duration in minutes/hours (small, unsigned)
            $table->string('image')->nullable(); // Path for image file (optional)
            $table->decimal('price', 8, 2)->default(0.00); // Price with 2 decimal points, default 0
            $table->foreignId('instructor_id')
                  ->constrained('users') // Assumes `users` table exists
                  ->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
