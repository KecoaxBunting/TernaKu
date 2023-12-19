<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class feed extends Model
{
    public function farm():BelongsToMany{
        return $this->belongsToMany(farm::class);
    }
    use HasFactory;
}
