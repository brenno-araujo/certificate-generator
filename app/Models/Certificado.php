<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Certificado extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'pais', 'nome' ];



}
