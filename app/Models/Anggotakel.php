<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggotakel extends Model
{
    use HasFactory;
    protected $table = 'anggotakels';
    protected $primaryKey = 'id';
    protected $fillable = ['namakk','anggotakel','hubungan'];

    public function namakk()
    {
        return $this->belongsTo(Namakk::class);
    }
}
