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
        if (!Schema::hasTable('listings')) {
        Schema::create('listings', function (Blueprint $table) {
            $table->id('listing_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('seller_id');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('item_id')->references('item_id')->on('items')->onDelete('cascade');
            $table->foreign('seller_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
