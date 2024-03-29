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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->default(1);
            $table->unsignedBigInteger('updated_by')->default(1);
            $table->string('number', 100)->default('')->comment('Номер документа');
            $table->string('fullname')->default('')->comment('Власник документу');
            $table->string('title')->default('')->comment('Назва в документі');
            $table->date('date_start')->nullable()->comment('Дата видачі документу');
            $table->date('date_end')->nullable()->comment('Термін дії документу');
            $table->string('institution')->comment('Організація, що видала документ');
            $table->nullableMorphs('documentable');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('document_type_id')->comment('Тип документу');
            $table->text('description')->nullable()->comment('Текст в документі');
            $table->tinyInteger('active')->default(1)->comment('1 = active, 0 = archived');
            $table->tinyInteger('status')->default(1)->comment('0 = accepted, 1 = editable, 2 = on review, 3 = accepted');
            $table->text('message')->nullable();


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
