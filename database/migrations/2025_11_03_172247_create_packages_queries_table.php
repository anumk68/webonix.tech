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
        Schema::create('packages_queries', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('package');
            $table->string('price');
            $table->string('name');
            $table->string('email');
            $table->string('number');
            $table->string('message');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages_queries');
    }
};
