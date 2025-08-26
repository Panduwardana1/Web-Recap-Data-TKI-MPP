<?php

namespace App\Imports;

use App\Models\Tki;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TkiImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Tki([
            'name'            => $row['name'],
            'nik'             => $row['nik'],
            'gender'          => $row['gender'],
            'place_of_birth'  => $row['place_of_birth'],
            'date_of_birth'   => Carbon::parse($row['date_of_birth'])->format('Y-m-d'),
            'address_vilage'  => $row['address_vilage'],
            'district'        => $row['district'],
            'education'       => $row['education'],
            'phone'           => $row['phone'] ?? null,
            'compani_id'      => $row['compani_id'],
            'destination_id'  => $row['destination_id'],
        ]);
    }

    /** Validasi tiap baris Excel */
    public function rules(): array
    {
        return [
            '*.nik'   => ['required', 'string', 'max:20', 'unique:tkis,nik'],
            '*.name'  => ['required', 'string', 'max:255'],
            '*.gender' => ['required', 'in:L,P'],
        ];
    }
}
