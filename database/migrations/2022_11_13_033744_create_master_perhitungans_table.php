<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPerhitungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_perhitungans', function (Blueprint $table) {
            $table->id();
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lingkar_kepala');
            $table->float('lingkar_lengan_atas');
            $table->boolean('asi_eksklusif');
            $table->string('BB_U');
            $table->string('IMT_U_T');
            $table->string('IMT_U_B');
            $table->string('BB_TB');
            $table->string('TB_U');
            $table->date('usia_saat_ukur');
            $table->date('tangga_pengukuran');
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
        Schema::dropIfExists('master_perhitungans');
    }
}
