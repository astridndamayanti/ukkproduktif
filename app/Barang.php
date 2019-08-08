<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
   protected $table='barang';
    protected $fillable = [
        'id','barang','kategori','stok','satuan','harga','updated_at'
    ];
}
