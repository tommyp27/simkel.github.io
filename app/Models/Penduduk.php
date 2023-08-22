<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Namakk;

class Penduduk extends Model
{

    use HasFactory;
    protected $table = 'penduduks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenkel',
        'agama',
        'status_kawin',

    ];

    public function namakks()
    {
        return $this->hasOne(Namakk::class);
    }
}
