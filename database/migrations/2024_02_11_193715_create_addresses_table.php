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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedTinyInteger('type');
            $table->string('region',100)->nullable();
            $table->string('subregion',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('district',100)->nullable();
            $table->string('st_type',20)->nullable();
            $table->string('street',100)->nullable();
            $table->string('building',10)->nullable();
            $table->string('room',5)->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
