<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryLelang extends Model
{
    use HasFactory;
    protected $table = 'history_lelangs';
    protected $fillable = [
        'name',
        'nama_barang',
        'lelang_id',
        'masyarakat_id',
        'petugas_id',
        'users_id',
        'harga',
        'tanggal',
        'status ',
    ];
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    public function lelang()
    {
        return $this->hasOne('App\Models\Lelang', 'id', 'lelang_id');
    }
}
