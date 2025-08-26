<?php

namespace App\Exports;

use App\Models\Tki;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TkiExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Tki::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'NIK',
            'Gender',
            'Place of Birth',
            'Date of Birth',
            'Address Village',
            'District',
            'Education',
            'Phone',
            'Company ID',
            'Destination ID',
            'Created At',
            'Updated At'
        ];
    }
}
