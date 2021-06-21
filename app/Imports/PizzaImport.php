<?php

namespace App\Imports;

use App\Models\Pizza;
use Maatwebsite\Excel\Concerns\ToModel;

class PizzaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pizza([
            
                'name'     => $row[0],
                'description'    => $row[1],
                'price' => $row[2]
            
        ]);
    }
}
