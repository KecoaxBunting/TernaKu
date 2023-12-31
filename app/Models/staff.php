<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class staff extends Model
{
    public function farm():BelongsTo{
        return $this->belongsTo(farm::class);
    }
    public function role():BelongsTo{
        return $this->belongsTo(role::class);
    }
    use HasFactory;
}
