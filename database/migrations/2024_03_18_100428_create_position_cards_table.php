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
        Schema::create('position_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->default(1);
            $table->unsignedBigInteger('updated_by')->default(1);
            $table->unsignedBigInteger('employee_id')->default(0);
            $table->unsignedBigInteger('position_id')->default(0);
            $table->tinyInteger('position_type')->default(1)->comment('1 - основна, 2 - сумісництво, 3 - зовнішній сумісник');
            $table->decimal('volume',5,2);
            $table->date('date_start')->default('1990-01-01');
            $table->date('date_end')->default('1990-01-01');
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
        Schema::dropIfExists('position_cards');
    }
};
