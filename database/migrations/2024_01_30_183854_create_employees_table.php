<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->default(1);
            $table->unsignedBigInteger('updated_by')->default(1);
            $table->string('reg_number')->nullable();
            $table->string('firstname', 100);
            $table->string('secondname', 100);
            $table->string('lastname', 100);
            $table->date('birthdate')->default('1900-01-01');
            $table->tinyInteger('gender')->nullable()->default(1)->comment('1 = male, 0 = female');
            $table->string('languages')->default('Англійська');
            $table->string('citizenship', 25)->default('Україна');
            
            $table->unsignedSmallInteger('ped_experience')->nullable();
            $table->unsignedSmallInteger('all_experience')->nullable();
            $table->unsignedBigInteger('scientific_rank_id')->default(1);
            $table->unsignedBigInteger('academic_rank_id')->default(1);
            $table->tinyInteger('active')->default(1)->comment('1 = active, 0 = archived');
            $table->tinyInteger('status')->default(1)->comment('0 = accepted, 1 = editable, 2 = on review, 3 = declined');
            $table->text('description')->nullable();
            $table->text('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
