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
        if (!Schema::hasTable('voertuig_instructeurs')) {
            Schema::create('voertuig_instructeurs', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('VoertuigId');
                $table->foreign('VoertuigId')->references('id')->on('voertuigs');
                $table->unsignedBigInteger('InstructeurId')->nullable();
                $table->foreign('InstructeurId')->references('id')->on('instructeurs');
                $table->date('DatumToekenning')->default(now());
                $table->boolean('IsActief')->default(true);
                $table->string('Opmerking')->nullable();
                $table->timestamp('DatumAangemaakt', 0)->nullable();
                $table->timestamp('DatumGewijzigd', 0)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voertuig_instructeurs');
    }
};