<?php

namespace App\Exports;

use App\Keranjang;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeranjangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Keranjang::all();
    }
}
