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
            $table->unsignedBigInteger('business_id')->nullable()->default(null)->after('id'); // Add nullable foreign key column
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade'); // Add the foreign key constraint

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['business_id']); // Drop foreign key first
            $table->dropColumn('business_id');    // Then drop the column
        });
    }
};
