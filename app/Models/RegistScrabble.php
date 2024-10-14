<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistScrabble extends Model
{
    use HasFactory;

    protected $table = 'regist_scrabble';
    protected $fillable = ['full_name', 'registration_proof'];
}
