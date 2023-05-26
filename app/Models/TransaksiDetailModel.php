<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetailModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi_detail';

    protected $fillable = [
        'transaksi_id',
        'item_id',
        'harga_satuan',
        'qty',
        'sub_total',
        'keterangan',
    ];

    public function item()
    {
        return $this->belongsTo(MasterItemModel::class, 'item_id', 'id');
    }

    public function  transaksi()
    {
        return $this->belongsTo(TransaksiModel::class, 'transaksi_id', 'id');
    }
}
