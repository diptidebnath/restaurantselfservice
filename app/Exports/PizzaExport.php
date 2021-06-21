<?php

namespace App\Exports;

use App\Models\Pizza;
use Maatwebsite\Excel\Concerns\FromCollection;

class PizzaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pizza::all();
    }
}
