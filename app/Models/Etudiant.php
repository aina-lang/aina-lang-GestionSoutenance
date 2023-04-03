<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $primaryKey = 'matricule';

    protected $fillable=[
        'matricule',
        'nom',
        'prenom',
        'niveau',
        'parcours',
        'email',
    ];
}
