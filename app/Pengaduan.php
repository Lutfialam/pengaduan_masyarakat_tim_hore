<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use SoftDeletes;
    protected $table = 'pengaduan';
    protected $fillable = [
        'id', 'judul', 'isi_pengaduan', 'gambar', 'url', 'user_id', 'category_id'
    ];
    
    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function response()
    {
        return $this->belongsToMany('App\response');
    }
}
