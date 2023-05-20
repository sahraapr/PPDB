<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = 'detailuser';
    protected $fillable = [
        'id_user',
        'nisn',
        'asal_sekolah',
        'nohp',
        'nohp_ayah',
        'nohp_ibu',
        'role',
        'jk',
        'tgl_lahir',
        'tempat_lahir',
        'agama',
        'jurusan',
        'nama_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
    ];
}
