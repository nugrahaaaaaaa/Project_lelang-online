<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listlelang extends Model
{
    use HasFactory;
    protected $table = 'lelangs';
    protected $fillable = [
        'barang_id',
        'users_id',
        'harga_awal',
        'harga_akhir',
        'tanggal_akhir',
        'status',
    ];

    public function barang()
    {
        return $this->hasOne('App\Models\barang','id','barangs_id');
    }
}
