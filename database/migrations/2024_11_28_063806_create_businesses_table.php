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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('business_name')->nullable(); // Business Name
            $table->text('business_description')->nullable(); // What your business (optional field)
            $table->string('category')->nullable(); // Category
            $table->string('business_number')->nullable()->unique(); // Business Number (unique)
            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
