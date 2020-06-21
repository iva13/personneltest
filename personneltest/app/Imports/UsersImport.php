<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class UsersImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'user' => $row[0],
            'client' => $row[1],
            'clientType' => $row[2],
            'date' => $row[3],
            'duration' => $row[4],
            'typeOfCall' => $row[5],
            'externalCallScore' => $row[6],
        ]);
    }
}
