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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->unique();
            $table->float('Price')->default(0);
            $table->string('url', 2048);
            $table->timestamps();

            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};