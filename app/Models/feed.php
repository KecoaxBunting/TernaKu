<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class feed extends Model
{
    public function animalType():HasMany{
        return $this->hasMany(animalType::class);
    }
    use HasFactory;
}
