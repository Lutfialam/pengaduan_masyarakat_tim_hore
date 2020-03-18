<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public $timestamps = false;
    protected $table = 'masyarakat';
    protected $fillable = [
        'name', 'users_id', 'NIK', 'telp', 'alamat'
    ];

    public function user()
    {
        return $this->belongsToMany('App\User', 'NIK');
    }
}
