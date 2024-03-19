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
        Schema::create('position_ranks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('ped_rank')->default(0)->comment('0 - немає, 1 - викладач-методист');
            $table->tinyInteger('ped_title')->default(0)->comment('0 - немає, 1 - викладач-методист');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_ranks');
    }
};
