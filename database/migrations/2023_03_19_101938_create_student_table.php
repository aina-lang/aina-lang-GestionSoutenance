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


        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('niveau');
            $table->string('parcours');
            $table->string('email');
            $table->timestamps();
            $table->primary('matricule');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('etudiant', function (Blueprint $table) {
            $table->dropPrimary('etudiant_niveau_primary');
        });
        Schema::dropIfExists('etudiant');
    }
};
