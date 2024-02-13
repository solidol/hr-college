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
        Schema::create('documents', function (Blueprint $table) {
            $table->string('number', 100)->default('')->comment('Номер документа');
            $table->string('fullname')->default('')->comment('Власник документу');
            $table->string('title')->default('')->comment('Назва в документі');
            $table->date('date_start')->nullable()->comment('Дата видачі документу');
            $table->date('date_end')->nullable()->comment('Термін дії документу');
            $table->string('institution')->comment('Організація, що видала документ');
            $table->morphs('documentable');
            $table->bigInteger('document_type_id')->unsigned()->comment('Тип документу');
            $table->text('description')->nullable()->comment('Текст в документі');
            
            $table->index('document_type_id');
            $table->fullText('number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
