<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_balita');
            $table->string('nik_balita');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('desa');
            $table->integer('rw');
            $table->string('golongan_darah');
            $table->float('berat_badan_lahir_bayi');
            $table->boolean('kms');
            $table->boolean('asuransi_kesehatan');
            $table->string('nama_bapak');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('nomor_telepon');
            $table->string('kartu_keluarga');
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
        Schema::dropIfExists('pasien');
    }
}
