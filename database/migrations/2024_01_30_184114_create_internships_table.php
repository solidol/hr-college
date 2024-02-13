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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('thesis',2000)->nullable();
            $table->text('description')->default('');
            $table->date('date_start')->nullable()->comment('Дата початку стажування');
            $table->date('date_end')->nullable()->comment('Дата закінчення стажування');
            $table->decimal('hours',8,2,true);
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('internship_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};