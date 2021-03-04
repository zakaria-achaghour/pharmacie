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
            $table->string('patente');
            $table->string('ice');
            $table->string('if');
            $table->string('num_autorisation')->nullable();
            $table->string('rc');

            $table->string('nom_pharmacien')->nullable();
            $table->string('contact')->nullable();
            $table->string('cin_pharmacien')->nullable();


            $table->string('fichier')->nullable();
            $table->boolean('fichier_cin');
            $table->boolean('fichier_diplome');
            $table->boolean('fichier_autorisation');
            $table->boolean('fichier_rc_patent');
            $table->boolean('fichier_if_ice');
           
            $table->boolean('bloque')->default(0);

            
            $table->softDeletes();
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
