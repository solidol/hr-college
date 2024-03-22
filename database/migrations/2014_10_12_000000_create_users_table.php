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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->default(1);
            $table->unsignedBigInteger('updated_by')->default(1);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->nullableMorphs('userable');
            $table->tinyInteger('status')->default(1)->comment('1 - active, 0 - disabled');
            $table->string('roles',100)->default('employee');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
