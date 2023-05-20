<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';
    protected $fillable = ['user_id','jawaban1','jawaban2','jawaban3'.'jawaban4','jawaban5','jawaban6','jawaban7','jawaban8','jawaban9'];
}
