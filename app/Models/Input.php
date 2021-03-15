<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    use HasFactory;
    protected $fillable = ['id_penduduk','id_aspirasi','lokasi','isi_laporan','bukti_laporan','created_at','updated_at'];
    public function Aspirasi() {
       return $this->belongsTo(Aspirasi::class,'id_aspirasi');
    }
    public function penduduk() {
       return $this->belongsTo(Penduduk::class,'id_penduduk');
    }
    
}
