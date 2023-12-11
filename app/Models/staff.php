<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class staff extends Model
{
    public function account():HasOne {
        return $this->hasOne(account::class);
    }

    public function address():BelongsTo {
        return $this->belongsTo(address::class);
    }
    public function role():BelongsTo {
        return $this->belongsTo(role::class);
    }
    public function farm():HasMany {
        return $this->hasMany(farm::class);
    }
    use HasFactory;
}
