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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedBigInteger('id_creator')->index('id_criador');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('goal_value', 10)->nullable();
            $table->decimal('current_value', 10)->nullable()->default(0);
            $table->enum('status', ['ativo', 'pausado', 'encerrado']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('ended_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
