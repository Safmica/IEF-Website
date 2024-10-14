<?php

namespace App\Exports;

use App\Models\Debate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DebateExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Debate::all();
    }

    public function headings(): array
    {
        return [
            'id_user',
            'team_name',
            'full_name_s1',
            'gender_s1',
            'student_id_number_s1',
            'major_s1',
            'faculty_s1',
            'university_s1',
            'nationality_s1',
            'phone_number_s1',
            'email_address_s1',
            'photo_s1',
            'id_student_card_s1',
            'full_name_s2',
            'gender_s2',
            'student_id_number_s2',
            'major_s2',
            'faculty_s2',
            'university_s2',
            'nationality_s2',
            'phone_number_s2',
            'email_address_s2',
            'photo_s2',
            'id_student_card_s2',
            'registration_proof'
        ];
    }
}