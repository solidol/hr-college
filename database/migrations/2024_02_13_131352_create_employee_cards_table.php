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
        Schema::create('employee_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('employee_id')->default(0);
            $table->unsignedBigInteger('position_id');
            $table->date('date_start')->default('1990-01-01');
            $table->date('date_end')->default('1990-01-01');
            $table->tinyInteger('editable')->default(1);
            $table->tinyInteger('accepted')->default(0);
            $table->text('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_cards');
    }
};
