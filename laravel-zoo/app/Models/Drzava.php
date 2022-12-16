<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drzava extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'broj_stanovnika',
        'predsednik'
    ];
    public function zoo()
    {
        return $this->hasMany(Zoo::class);
    }

}
