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
        Schema::table('users', function (Blueprint $table) {
            // Remove existing columns
            $table->dropColumn(['email_verified_at', 'password']);

            // Add new columns
            $table->string('number')->nullable()->unique()->after('email');
            $table->string('phone_otp')->nullable()->default(null)->after('number');
            $table->timestamp('phone_otp_exp')->nullable()->default(null)->after('phone_otp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Add the removed columns back
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Remove the newly added columns
            $table->dropColumn(['number', 'phone_otp', 'phone_otp_exp']);
        });
    }
};
