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
        Schema::create('type_voertuigs', function (Blueprint $table) {
            $table->id();
            $table->string('TypeVoertuig');
            $table->string('Rijbewijscategorie');
            $table->boolean('IsActief')->default(true);
            $table->string('Opmerking')->nullable();
            $table->timestamp('DatumAangemaakt', 0)->nullable();
            $table->timestamp('DatumGewijzigd', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_voertuigs');
    }
};
