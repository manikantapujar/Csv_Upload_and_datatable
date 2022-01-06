<?php

namespace App\Imports;

use App\Models\Csv;
use Maatwebsite\Excel\Concerns\ToModel;

class Dataimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Csv([
                'NPI' => $row[0],
                'Provider Organization Name (Legal Business Name)' => $row[1],
                'Provider Last Name (Legal Name)' => $row[2],
                'Provider First Name' => $row[3],
                'Provider Middle Name' => $row[4],
                'Provider Other Organization Name' => $row[5],
        ]);
    }
}
