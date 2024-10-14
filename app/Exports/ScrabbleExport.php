<?php

namespace App\Exports;

use App\Models\Scrabble;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ScrabbleExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Scrabble::all();
    }

    public function headings(): array
    {
        return [
            'id_user',
            'full_name',
            'gender',
            'student_id_number',
            'major',
            'faculty',
            'university',
            'nationality',
            'phone_number',
            'email_address',
            'photo',
            'id_student_card',
            'registration_proof'
        ];
    }
}