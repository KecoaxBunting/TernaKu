<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class farm extends Model
{
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function animal():BelongsToMany{
        return $this->belongsToMany(animal::class);
    }
    public function staff():HasMany{
        return $this->hasMany(staff::class);
    }
    public function transaction():HasMany{
        return $this->hasMany(transaction::class);
    }
    public function feed():HasMany{
        return $this->hasMany(feed::class);
    }
    public function product():HasMany{
        return $this->hasMany(product::class);
    }
    use HasFactory;
}
