<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lelang;
use App\Models\Historylelang;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = [
        'nama_barang',
        'tanggal',
        'harga_awal',
        'image',
        'deskripsi',
    ];
    public function lelang()
    {
        return $this->belongto(Lelang::class);
    }
    public function historylelang()
    {
        return $this->belongsTo(Historylelang::class);
    }
}
