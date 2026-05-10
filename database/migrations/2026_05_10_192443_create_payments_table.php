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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('id_donations')->index('id_donations');
            $table->decimal('value', 10);
            $table->enum('status', ['pendente', 'paga', 'cancelada', 'estornada'])->nullable()->default('pendente');
            $table->string('payment_type');
            $table->timestamp('payment_date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
