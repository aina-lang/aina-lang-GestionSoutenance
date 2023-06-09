<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soutenir extends Model
{
    use HasFactory;

    // protected $primaryKey;
    protected $fillable = [
        'matricule',
        'idorg',
        'annee_univ',
        'note',
        'president',
        'examinateur',
        'rapporteur_int',
        'rapporteur_ext',
    ];

    public function etudiants()
    {
        return $this->belongsTo(Etudiant::class, 'matricule', 'matricule');
    }

    public function organismes()
    {
        return $this->belongsTo(Organisme::class, 'idorg');
    }

    public function presidents()
    {
        return $this->belongsTo(Professeur::class, 'president');
    }
    public function rapporteur_exts()
    {
        return $this->belongsTo(Professeur::class, 'rapporteur_ext');
    }

    public function rapporteur_ints()
    {
        return $this->belongsTo(Professeur::class, 'rapporteur_int');
    }
    public function examinateurs()
    {
        return $this->belongsTo(Professeur::class, 'examinateur');
    }


}


