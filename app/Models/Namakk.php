<?php

namespace App\Models;
use App\Models\Pdkk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Namakk extends Model
{

    protected $table = 'namakk';
    protected $primaryKey = 'id';
    protected $fillable = ['nomorkk','penduduk_id'];


    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }

    public function anggotakels()
    {
        return $this->hasOne(Anggotakel::class);
    }

}