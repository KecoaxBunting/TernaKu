<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pakan extends Model
{
    public function animal_detail():HasMany{
        return $this->hasMany(animal_detail::class);
    }
    use HasFactory;
}
