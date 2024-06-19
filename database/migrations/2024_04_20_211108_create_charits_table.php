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
        Schema::create('charits', function (Blueprint $table) {$table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('website_link')->nullable();
            $table->boolean('isActive')->default(0);
            $table->foreignId('admin_id')->nullable()->constrained('admins')->onDelete('set null')->onUpdate('set null');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('charits');
    }
};
