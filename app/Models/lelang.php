<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\HistoryLelang;


class lelang extends Model
{
    use HasFactory;
    protected $table = 'lelangs';
    protected $fillable = [
        'barangs_id',
        'users_id',
        'harga_awal',
        'harga_akhir',
        'tanggal_lelang',
        'image',
        'status',
    ];

    public function barang()
    {
        return $this->hasOne('App\Models\barang','id','barangs_id');
    }
    public function historylelang()
    {
        return $this->belongTo(historylelang::class);
    }
}
