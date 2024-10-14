<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistSpeech extends Model
{
    use HasFactory;

    protected $table = 'regist_speech';
    protected $fillable = ['full_name', 'registration_proof'];
}
