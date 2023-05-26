<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'no_transaksi',
        'tanggal',
        'nama_pelanggan',
        'total_bayar',
        'bayar',
        'kembalian',
    ];

    public function transaksis()
    {
        return $this->hasMany(TransaksiDetailModel::class, 'transaksi_id', 'id');
    }

    public function progress()
    {
        return $this->hasMany(TransaksiProgressModel::class, 'transaksi_id', 'id');
    }
}
