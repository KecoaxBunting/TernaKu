<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class farm extends Model
{
    public function staff():HasMany{
        return $this->hasMany(staff::class);
    }
    public function location():BelongsTo{
        return $this->belongsTo(location::class);
    }
    public function asset():HasMany{
        return $this->hasMany(asset::class);
    }
    public function transaction_header():BelongsTo{
        return $this->belongsTo(transaction_header::class);
    }
    public function animal():HasMany{
        return $this->hasMany(animal::class);
    }
    use HasFactory;
}
