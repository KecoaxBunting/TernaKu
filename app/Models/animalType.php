<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class animalType extends Model
{
    public function animal():HasMany{
        return $this->hasMany(animal::class);
    }
    public function feed():BelongsTo{
        return $this->belongsTo(feed::class);
    }
    public function product():BelongsTo{
        return $this->belongsTo(product::class);
    }
    use HasFactory;
}
