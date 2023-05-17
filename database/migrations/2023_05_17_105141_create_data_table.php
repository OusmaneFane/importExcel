<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();

            $table->string('numero')->nullable();
            $table->string('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('centre_zone')->nullable();
            $table->string('department')->nullable();
            $table->string('sous_depart')->nullable();
              $table->string('services')->nullable();
              $table->string('categories')->nullable();
              $table->string('fonctions')->nullable();
              $table->string('qualifications')->nullable();
              $table->string('annee')->nullable();
              $table->string('mois')->nullable();
              $table->string('ref_paie')->nullable();
              $table->string('jour_trav')->nullable();
              $table->string('heures_normales')->nullable();
              $table->string('nbre_heure_supp')->nullable();
              $table->string('taux_horaires')->nullable();
              $table->string('salaire_base')->nullable();
              $table->string('anciennete')->nullable();
              $table->string('allocations_conges')->nullable();
              $table->string('heure_supp')->nullable();
              $table->string('idem_speciale')->nullable();
              $table->string('idem_solidarite')->nullable();
              $table->string('sursalaire')->nullable();
              $table->string('prime_cantine')->nullable();
              $table->string('prime_heure')->nullable();
              $table->string('salaire_brut')->nullable();
              $table->string('avan_nature')->nullable();
              $table->string('cot_salariales')->nullable();
              $table->string('cot_expat_salariale')->nullable();
              $table->string('impots')->nullable();
              $table->string('asuurance_maldie')->nullable();
              $table->string('avance_sur_salaire')->nullable();
              $table->string('report')->nullable();
                $table->string('arrondi')->nullable();
                $table->string('net_payer')->nullable();
                $table->string('cot_patronales')->nullable();
                $table->string('cfe')->nullable();
                $table->string('tfp')->nullable();
                $table->string('tej')->nullable();
                $table->string('tl')->nullable();
                $table->string('cot_expat_patronales')->nullable();
                $table->string('assurance_maldie')->nullable();

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
        Schema::dropIfExists('data');
    }
}
