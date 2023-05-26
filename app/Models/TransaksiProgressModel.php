<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiProgressModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi_progress';

    protected $fillable = [
        'transaksi_id',
        'keterangan',
        'progress_times',
    ];

    public function progres()
    {
        return $this->belongsTo(TransaksiModel::class, 'transaksi_id', 'id');
    }
}
