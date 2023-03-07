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
            $table->string('Name')->unique();
            $table->float('Price')->default(0);
            $table->text('Description');
            $table->string('url', 2048);
            $table->timestamps();

            # Link on how to write relation between tables
            ## https://laravel.com/docs/10.x/migrations#foreign-key-constraints
            // $table->unsignedBigInteger('categories_id');
            // $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreignId('categories_id')->constrained('categories');

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
