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
        Schema::create('product_availabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->date('from_date')->comment('Start date of availability');
            $table->date('to_date')->comment('End date of availability');
            $table->boolean('status')->comment('1 = open, 0 = block-night');
            $table->timestamps();

            // Foreign key constraint (assuming a 'products' table exists)
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_availabilities');
    }
};
