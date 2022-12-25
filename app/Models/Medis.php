<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medis extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien','vitamin_a','oralit','campak','dpt','polio','bcg','hb','tanggal_pemberian','obat_cacing'
    ];
}
