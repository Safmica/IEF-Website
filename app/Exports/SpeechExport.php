<?php

namespace App\Exports;

use App\Models\Speech;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class SpeechExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Speech::all();
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