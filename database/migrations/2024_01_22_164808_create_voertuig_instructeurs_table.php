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
            $table->unsignedBigInteger('Voertuig_Id');
            $table->foreign('Voertuig_Id')->references('id')->on('voertuigs');
            $table->unsignedBigInteger('Instructeur_Id');
            $table->foreign('Instructeur_Id')->references('id')->on('instructeurs');
            $table->date('DatumToekenning');
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
        Schema::dropIfExists('voertuiginstructeurs');
    }
};
