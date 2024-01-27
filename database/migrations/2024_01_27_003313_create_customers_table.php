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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade');
            $table->text('name')->nullable();
            $table->string("telephone")->nullable();
            $table->string("email")->nullable();
            $table->text("address")->nullable();
            $table->string("city")->nullable();
            $table->string("province")->nullable();
            $table->string("pos_code")->nullable();
            $table->string("npwp")->nullable();
            $table->double('total_discount')->nullable();
            $table->double('credit_limit_transaction')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
