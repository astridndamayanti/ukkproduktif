<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
	protected $table='keranjang';
    protected $fillable = [
        'id', 
		'nama' ,
		'barang',
		'jumlah',
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
