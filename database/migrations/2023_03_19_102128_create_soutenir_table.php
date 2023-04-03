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
        Schema::create('soutenirs', function (Blueprint $table) {
            // if ($table->hasIndex('PRIMARY')) {
            //     $table->dropPrimary();
            // }
            $table->integer('idorg')->unsigned();
            $table->string('matricule');
            $table->string('annee_univ');
            $table->integer('note');
            $table->string('president');
            $table->string('examinateur');
            $table->string('rapporteur_int');
            $table->string('rapporteur_ext');
            $table->timestamps();
            $table->foreign('idorg')->references('idorg')->on('organismes')->onDelete('cascade');
            $table->foreign('matricule')->references('matricule')->on('etudiants')->onDelete('cascade');
            $table->primary('Annee_univ');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soutenir');
    }
};
