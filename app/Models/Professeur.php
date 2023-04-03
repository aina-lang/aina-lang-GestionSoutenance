<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prof';
    protected $fillable=[
        'nom',
        'prenoms',
        'civilites',
        'grade',
    ];

    public function soutenances()
    {
        return $this->hasMany(Soutenance::class);
    }
}
