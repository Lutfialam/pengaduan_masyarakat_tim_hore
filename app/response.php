<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    protected $fillable = [
        'pengaduan_id', 'tanggapan', 'petugas_id'
    ];

    public function pengaduan()
    {
        return $this->belongsTo('App\Pengaduan');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas');
    }
}
