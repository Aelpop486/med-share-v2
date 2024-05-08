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
        Schema::create('charity_users', function (Blueprint $table) {
            $table->id();
            $table->steing('name');
            $table->string('email')->nullable()->unique();
            $table->string('password')->nullable();
            $table->steing('phone')->unique();
            $table->string('image')->nullable();
            $table->enum('role', ['admin', 'delvery','reviewer','volunteer'])->default('admin');
            $table->boolean('isActive')->default(true);
            $table->foreignId('charity_id')->constrained('charits')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charity_users');
    }
};
