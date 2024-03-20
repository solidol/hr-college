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
            $table->string('thesis',2000)->nullable();
            $table->string('institution',2000)->nullable();
            $table->string('department',2000)->nullable();
            $table->date('date_start')->nullable()->comment('Дата початку стажування');
            $table->date('date_end')->nullable()->comment('Дата закінчення стажування');
            $table->decimal('hours',8,2,true);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('position_card_id');
            //$table->unsignedBigInteger('document_id')->default(0);
            $table->unsignedBigInteger('internship_type_id');
            $table->tinyInteger('active')->default(1)->comment('1 = active, 0 = archived');
            $table->tinyInteger('status')->default(1)->comment('0 = accepted, 1 = editable, 2 = on review, 3 = accepted');
            $table->text('message')->nullable();
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
