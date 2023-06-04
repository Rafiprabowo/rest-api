<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    public $timestamps = false;

    protected $primaryKey = 'nim';

    public $incrementing = false;

    protected $fillable = [
        "nim" => "required",
        "nama" => "required",
        "kelas_id" => "required",
        "jurusan" => "required",
        "prodi" => "required",
        "no_hp" => "required"
    ];
}
