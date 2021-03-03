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
            $table->string('Num_autorisation')->unique();
            $table->string('rc')->unique();
            $table->string('adresse');
            $table->string('nom_pharmacien');
            $table->string('contact');
            $table->string('cin_pharmacien')->nullable();

            $table->string('fichier_cin');
            $table->string('fichier_diplome');
            $table->string('fichier_autorisation');
            $table->string('fichier_rc_patent');
            $table->string('fichier_if_ice');

            $table->boolean('statu');
            $table->boolean('bloque');
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
