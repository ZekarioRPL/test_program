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
            
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('name')->nullable();
            $table->string('code')->nullable();
            $table->string('category')->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->integer('tube_diameter')->nullable();
            $table->integer('weight')->nullable();
            $table->string('fire_rating')->nullable();

            $table->timestamps();
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
