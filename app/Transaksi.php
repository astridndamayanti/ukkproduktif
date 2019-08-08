<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';
    protected $fillable = [
        'id','nama','barang','jumlah','satuan','harga','kategori','tanggal','total_satuan','total','atas_nama','alamat','no_tlp','bukti','status','tgl_terima'
    ]; 
}
