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
            $table->unsignedBigInteger('created_by')->default(1);
            $table->unsignedBigInteger('updated_by')->default(1);
            $table->morphs('personable');
            $table->unsignedTinyInteger('type');
            $table->string('region',100)->nullable();
            $table->string('subregion',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('district',100)->nullable();
            $table->string('st_type',20)->nullable();
            $table->string('street',100)->nullable();
            $table->string('building',10)->nullable();
            $table->string('room',5)->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
