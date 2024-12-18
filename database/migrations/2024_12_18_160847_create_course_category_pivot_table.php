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
        Schema::create('course_category_pivot', function (Blueprint $table) {
            $table->foreignId('course_id')
                  ->constrained()
                  ->cascadeOnDelete();
            
            $table->foreignId('category_id')
                  ->constrained()
                  ->cascadeOnDelete();
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_category_pivot');
    }
};
