<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasiens extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_balita',
        'nik_balita',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'desa',
        'rw',
        'golongan_darah',
        'berat_badan_lahir_bayi',
        'kms',
        'asuransi_kesehatan',
        'nama_bapak',
        'nik_bapak',
        'nama_ibu',
        'nik_ibu',
        'nomor_telepon',
        'kartu_keluarga',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'lingkar_lengan_atas',
        'asi_eksklusif',
        'usia_saat_ukur',
        'tanggal_pengukuran',
        'BB_U',
        'IMT_U_T',
        'IMT_U_B',
        'BB_TB',
        'TB_U',
        'IMT_U_T_Hasil',
        'IMT_U_B_Hasil',
        'vitamin_a',
        'oralit', 
        'campak', 
        'dpt', 
        'polio', 
        'bcg',
        'hb', 
        'tanggal_pemberian',
        'obat_cacing'
    ];
}
