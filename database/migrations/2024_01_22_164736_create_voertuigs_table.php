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
        if (!Schema::hasTable('voertuigs')) {
        Schema::create('voertuigs', function (Blueprint $table) {
            $table->id();
            $table->string('Kenteken');
            $table->string('Type');
            $table->date('Bouwjaar');
            $table->string('Brandstof');
            $table->unsignedBigInteger('TypeVoertuigId');
            $table->foreign('TypeVoertuigId')->references('id')->on('type_voertuigs');
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
        Schema::dropIfExists('voertuigs');
    }
};
