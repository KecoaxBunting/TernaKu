<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class account extends Model
{
    use HasFactory;
    public function farm():HasOne{
        return $this->hasOne(farm::class);
    }
}
