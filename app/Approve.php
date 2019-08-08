<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
   protected $table='approve';
    protected $fillable = [
        'id', 
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
