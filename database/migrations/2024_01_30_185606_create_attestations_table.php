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
        Schema::create('attestations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('at_date')->nullable();
            $table->unsignedBigInteger('position_rank_id');
            $table->unsignedBigInteger('position_card_id');
            $table->tinyInteger('at_type')->default(1);
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
        Schema::dropIfExists('attestations');
    }
};
