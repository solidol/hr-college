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
        Schema::create('established_ranks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('established_date')->nullable();
            $table->unsignedBigInteger('attestation_id')->nullable();
            $table->unsignedBigInteger('position_card_id');
            $table->unsignedBigInteger('position_rank_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('established_ranks');
    }
};
