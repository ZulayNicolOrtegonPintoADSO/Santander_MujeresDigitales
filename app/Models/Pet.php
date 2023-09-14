<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'race_id',
        'categorie_id',
        'photo',
        'gender_id'
    ];

    public function races()
    {
        return $this->hasMany(Races::class);
    }

    public function categories()
    {
        return $this->hasMany(Categories::class);
    }

    public function genders()
    {
        return $this->hasMany(Genders::class);
    }
}
