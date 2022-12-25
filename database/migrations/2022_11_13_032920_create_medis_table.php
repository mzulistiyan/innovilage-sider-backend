<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medis', function (Blueprint $table) {
            $table->id();
            $table->string('id_pasien');
            $table->boolean('vitamin_a');
            $table->boolean('asi_eksklusif');
            $table->boolean('oralit');
            $table->boolean('campak');
            $table->boolean('dpt');
            $table->boolean('polio');
            $table->boolean('bcg');
            $table->boolean('hb');
            $table->date('tanggal_pemberian');
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
        Schema::dropIfExists('medis');
    }
}
