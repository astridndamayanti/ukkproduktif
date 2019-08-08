<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $table='inputbarang';
    protected $fillable = [
        'id','barang','stok','satuan','created_at','keterangan',
    ];
}
