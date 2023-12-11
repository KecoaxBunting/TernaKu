<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class asset extends Model
{
    public function farm():HasMany{
        return $this->hasMany(farm::class);
    }
    public function asset_type():BelongsTo{
        return $this->belongsTo(asset_type::class);
    }
    public function status():BelongsTo{
        return $this->belongsTo(status::class);
    }
    public function cage():HasMany{
        return $this->hasMany(cage::class);
    }
    use HasFactory;
}
