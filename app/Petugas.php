<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'Petugas';
    protected $fillable = [
        'id', 'nama_petugas', 'email', 'password', 'telp', 'user_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
