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
        Schema::create('instructeur_voertuig_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('InstructeurId');
            $table->unsignedBigInteger('VoertuigId');
            $table->foreign('InstructeurId')->references('id')->on('instructeurs');
            $table->foreign('VoertuigId')->references('id')->on('voertuigs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructeur_voertuig_histories');
    }
};
