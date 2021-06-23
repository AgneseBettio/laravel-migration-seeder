<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {
            $table->string('tipologia', 100);
            $table->mediumInteger('codice_viaggio');
            $table->string('periodo_anno', 20)->comment('indicare stagione');
            $table->year('anno_pacchetto');
            $table->string('meta', 200);
            $table->longText('descrizione')->nullable();
            $table->date('data_partenza');
            $table->date('data_ritorno');
            $table->boolean('assicurazione')->comment('rimborso spese in termini previsti')->default(false);
            $table->boolean('disponibilita')->default(true);
            $table->smallInteger('posti_totali');
            $table->smallInteger('posti_prenotati');		
            $table->smallInteger('posti_disponibili');
            $table->float('prezzo_totale', 9,2)->nullable();		
            $table->float('prezzo_pernottamenti', 9, 2)->nullable();
            $table->float('prezzo_spostamenti', 9, 2)->default(0)->nullable();
            $table->float('prezzo_extra', 9, 2)->default(0)->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travels', function (Blueprint $table) {
            $table->dropColumn('tipologia');
            $table->dropColumn('codice_viaggio');
            $table->dropColumn('periodo_anno');
            $table->dropColumn('anno_pacchetto');
            $table->dropColumn('meta');
            $table->dropColumn('descrizione');
            $table->dropColumn('data_partenza');
            $table->dropColumn('data_ritorno');
            $table->dropColumn('assicurazione');
            $table->dropColumn('disponibilita');
            $table->dropColumn('posti_totali');
            $table->dropColumn('posti_prenotati');		
            $table->dropColumn('posti_disponibili');
            $table->dropColumn('prezzo_totale');		
            $table->dropColumn('prezzo_pernottamenti');
            $table->dropColumn('prezzo_spostamenti');
            $table->dropColumn('prezzo_extra');    
        });
    }
}
