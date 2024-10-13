<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistDebate extends Model
{
    use HasFactory;

    protected $table = 'regist_debate'; // Nama tabel
    protected $fillable = ['team_name', 'registration_proof'];
}
