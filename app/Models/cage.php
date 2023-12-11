<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cage extends Model
{
    public function asset():HasMany{
        return $this->hasMany(asset::class);
    }
    use HasFactory;
}
