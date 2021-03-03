<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('patente')->unique();
            $table->string('ice')->unique();
            $table->string('i_f')->unique();
            $table->string('Num_autorisation')->nullable();
            $table->string('rc')->unique();
            $table->string('adresse')->nullable();
            $table->string('nom_pharmacien')->nullable();
            $table->string('contact')->nullable();
            $table->string('cin_pharmacien')->nullable();

            $table->string('nom_fichier')->nullable();
            $table->boolean('fichier_cin');
            $table->boolean('fichier_diplome');
            $table->boolean('fichier_autorisation');
            $table->boolean('fichier_rc_patent');
            $table->boolean('fichier_if_ice');

            $table->boolean('statu')->default(0);
            $table->boolean('bloque')->default(0);
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
}
