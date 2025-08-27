<?php

namespace App\Imports;

use App\Models\Tki;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\SkipsFailures;

class TkiImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use SkipsFailures;

    public static $requiredHeaders = [
        'name', 'nik', 'gender', 'place_of_birth', 'date_of_birth', 'address_vilage',
        'district', 'education', 'phone', 'compani_id', 'destination_id'
    ];

    public function headingRow(): int
    {
        return 1;
    }

    public function onFailure(...$failures)
    {
        // Optional: handle row failures
    }

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

    public function rules(): array
    {
        return [
            '*.nik'   => ['required', 'string', 'max:20', 'unique:tkis,nik'],
            '*.name'  => ['required', 'string', 'max:255'],
            '*.gender' => ['required', 'in:L,P'],
            '*.place_of_birth' => ['required', 'string', 'max:100'],
            '*.date_of_birth' => ['required', 'date'],
            '*.address_vilage' => ['required', 'string', 'max:50'],
            '*.district' => ['required', 'string', 'max:100'],
            '*.education' => ['required', 'in:SD,SMP,SMA,SLTP,SLTA,AK1'],
            '*.compani_id' => ['required', 'exists:companis,id'],
            '*.destination_id' => ['required', 'exists:destinations,id'],
        ];
    }

    public function prepareForValidation($data, $index)
    {
        if ($index === 0) {
            $headers = array_keys($data);
            $missing = array_diff(self::$requiredHeaders, $headers);
            if (count($missing)) {
                throw new \Exception('Kolom berikut wajib ada di file: '.implode(', ', $missing));
            }
        }
        return $data;
    }
}
