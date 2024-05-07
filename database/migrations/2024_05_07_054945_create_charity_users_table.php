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
            $table->string('email')->unique();
            $table->string('password');
            $table->steing('phone')->unique();
            $table->string('image')->nullable();
            $table->enum('role', ['admin', 'delvery','reviewer','volunteer'])->default('admin');
            $table->enum('status', ['active', 'not active'])->default('active');
            $table->foreignId('charity_id')->constrained('charits')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('email_verified_at')->nullable();
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
