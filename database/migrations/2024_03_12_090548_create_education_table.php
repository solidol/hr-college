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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->date('date_start')->nullable()->comment('Дата початку навчання');
            $table->date('date_end')->nullable()->comment('Дата закінчення навчання');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('education_level_id');
            $table->text('description')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
