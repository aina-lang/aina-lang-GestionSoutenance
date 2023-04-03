<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisme extends Model
{
    use HasFactory;

    protected $primaryKey='idorg';

    protected $fillable=[
        'design',
        'lieu',
    ];

    public function soutenances()
    {
        return $this->hasMany(Soutenance::class);
    }
}
