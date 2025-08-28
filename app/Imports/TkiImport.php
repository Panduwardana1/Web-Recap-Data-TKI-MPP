<?php

namespace App\Imports;

use App\Models\Tki;
use App\Models\Compani;
use App\Models\Destination;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TkiImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        // cari atau buat company
        $compani = Compani::firstOrCreate(
            ['name' => $row['compani_name']],
            ['address' => '-', 'phone' => null]
        );

        // cari atau buat destination
        $destination = Destination::firstOrCreate(
            ['country_name' => $row['destination_name']],
            ['country' => '-', 'description' => null]
        );

        return new Tki([
            'name'            => $row['name'],
            'nik'             => $row['nik'],
            'gender'          => $row['gender'],
            'place_of_birth'  => $row['place_of_birth'],
            'date_of_birth'   => Carbon::parse($row['date_of_birth'])->format('Y-m-d'),
            'address_vilage'  => $row['address_vilage'],
            'district'        => $row['district'],
            'education'       => $row['education'] ?? 'AK1',
            'phone'           => $row['phone'] ?? null,
            'compani_id'      => $compani->id,
            'destination_id'  => $destination->id,
        ]);
    }

    public function rules(): array
    {
        return [
            '*.nik' => ['required', 'unique:tkis,nik'],
            '*.name' => ['required', 'string'],
            '*.gender' => ['required', 'in:L,P'],
            '*.date_of_birth' => ['required', 'date'],
            '*.compani_name' => ['required', 'string'],
            '*.destination_name' => ['required', 'string'],
        ];
    }
}
