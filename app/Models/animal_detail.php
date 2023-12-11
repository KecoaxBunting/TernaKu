<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class animal_detail extends Model
{
    public function animal():HasMany{
        return $this->hasMany(animal::class);
    }
    public function pakan():HasMany{
        return $this->hasMany(pakan::class);
    }
    public function product():HasMany{
        return $this->hasMany (product::class);
    }

    use HasFactory;
}
