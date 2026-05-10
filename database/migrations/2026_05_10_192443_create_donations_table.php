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
        Schema::create('donations', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedBigInteger('id_users')->index('id_users');
            $table->bigInteger('id_projects')->index('id_projects');
            $table->decimal('value', 10);
            $table->enum('status', ['pendente', 'paga', 'cancelada', 'estornada'])->nullable()->default('pendente');
            $table->string('payment_type');
            $table->timestamp('donation_date')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
