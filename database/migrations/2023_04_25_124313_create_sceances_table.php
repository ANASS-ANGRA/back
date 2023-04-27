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
        Schema::create('sceances', function (Blueprint $table) {
            $table->id();
            $table->date("date_sceance");
            $table->string("resumer");
            $table->string("participant");
            $table->foreignId('pov_id')->constrained('povs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sceances');
    }
};
