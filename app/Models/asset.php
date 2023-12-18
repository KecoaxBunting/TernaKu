<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class asset extends Model
{
    public function farm():BelongsToMany{
        return $this->belongsToMany(farm::class);
    }
    use HasFactory;
}
