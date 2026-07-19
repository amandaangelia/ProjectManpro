<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{

    protected $fillable = [
        'id',
        'namaLengkap',
        'tanggalMeninggal',
        'noHp',
        'namaPemohon',
        'keterangan'
    ];
    protected $table= 'kematians';
    protected $guarded =['id'];
    use HasFactory;
}
