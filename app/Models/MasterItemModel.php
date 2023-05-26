<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterItemModel extends Model
{
    use HasFactory;

    protected $table = 'master_item';

    protected $fillable = [
        'nama',
        'keterangan',
        'harga',
    ];

    public function items()
    {
        return $this->hasMany(TransaksiDetailModel::class, 'item_id', 'id');
    }
}
