<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scrap extends Model
{
   protected $table='scrap';
    protected $fillable = [
       'id','id_barang','barang','kode_oracle','kategori','stok','satuan','alasan',
    ]; //
}
