<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newscasting extends Model
{
    use HasFactory;
    protected $table = "regist_newscasting";
    protected $fillable = [
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
