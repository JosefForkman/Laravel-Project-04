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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('Content');
            $table->timestamps();

            # Link on how to write relation between tables
            ## https://laravel.com/docs/10.x/migrations#foreign-key-constraints
            // $table->unsignedBigInteger('product_id');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('products_id')->constrained('products');
            $table->foreignId('users_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
