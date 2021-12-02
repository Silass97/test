<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'dateNaissance', 'email', 'profession', 'numero', 'motdpasse'];
}
