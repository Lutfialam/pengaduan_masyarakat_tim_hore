<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public $timestamps = false;
    protected $table = 'masyarakat';
    protected $fillable = [
        'name', 'user_id', 'NIK', 'telp', 'alamat', 'ip'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}
