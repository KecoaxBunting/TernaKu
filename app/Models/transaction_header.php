<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class transaction_header extends Model
{
    public function farm():HasMany{
        return $this->hasMany(farm::class);
    }
    public function transaction_detail():HasMany{
        return $this->hasMany(transaction_detail::class);
    }
    use HasFactory;
}
