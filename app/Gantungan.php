<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gantungan extends Model
{
    Protected $table='gantungan';
    protected $fillable = [
        'id', 
        'transaksi',
		'nama' ,
		'departemen',
		'barang',
		'jumlah',
		'jmlpenuhi',
		'satuan',
		'kategori', 
		'tanggal', 
		'status', 
		'terima',
		'approve',
		'gantungan',
		'updated_at',
    ];
}
