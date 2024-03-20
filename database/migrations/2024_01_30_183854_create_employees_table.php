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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('reg_number')->unique();
            $table->string('firstname',100);
            $table->string('secondname',100);
            $table->string('lastname',100);
            $table->date('birthdate')->default('1900-01-01');
            $table->tinyInteger('gender')->nullable()->default(1)->comment('1 = male, 0 = female');
            $table->string('languages')->default('');
            $table->string('citizenship', 25)->default('Україна');
            $table->unsignedSmallInteger('employee_grade')->default(0);
            $table->unsignedSmallInteger('ped_experience')->default(0);
            $table->unsignedSmallInteger('all_experience')->default(0);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
