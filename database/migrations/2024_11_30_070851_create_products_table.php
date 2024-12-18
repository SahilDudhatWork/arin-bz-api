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
            $table->string('name')->default(null); // Product name
            $table->unsignedInteger('number_of_bedrooms')->default(0); // Number of bedrooms, default to 0
            $table->unsignedInteger('number_of_bathrooms')->default(0); // Number of bathrooms, default to 0
            $table->string('location')->default(null); // Address or general location description
            $table->decimal('latitude', 10, 7)->nullable()->default(null); // Latitude (default null)
            $table->decimal('longitude', 10, 7)->nullable()->default(null); // Longitude (default null)
            $table->text('description')->nullable()->default(null); // Description of the product, default null
            $table->decimal('price', 10, 2)->default(0.00); // Price of the product
            $table->decimal('discounted_price', 10, 2)->nullable()->default(null); // Discounted price (default null)
            $table->unsignedInteger('maximum_guests')->default(0); // Maximum number of guests, default to 0
            $table->date('available_from')->nullable()->default(null); // Availability date, default null
            $table->unsignedInteger('inquiry_limit')->default(0); // Inquiry limit (default 0)
            $table->string('product_hero_image')->nullable()->default(null); // Path to the product's hero image, default null
            $table->json('other_images')->nullable()->default(null); // JSON array for other images, default null
            $table->timestamps(); // Created at and updated at timestamps
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
