<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table='tanggapan';
    protected $fillable = [
        'nama',
        'departemen',
        'id',
        'tanggapan',
		'tanggal',
		'status',
    ];//
}
