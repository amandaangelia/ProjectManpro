<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{

    protected $fillable = [
        'id',
        'nama',
        'jenisKelamin',
        'alamat',
        'noHp',
        'tempatLahir',
        'tanggalLahir'
    ];

    protected $table= 'jemaats';
    protected $guarded =['id'];
    use HasFactory;
}
