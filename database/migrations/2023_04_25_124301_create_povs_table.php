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
        Schema::create('povs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appliance_id')->constrained('appliances');
            $table->foreignId('client_id')->constrained('clients');
            $table->date("date_debut");
            $table->date("date_fin");
            $table->string("description");
            $table->string("compte_manager");
            $table->string("ingenier_cybersecurite");
            $table->string("analyse_cybersecurite");
            $table->string("libelle_pov");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('povs');
    }
};
