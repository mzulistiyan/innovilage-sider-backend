<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPasiens extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien',
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
    ];
}
