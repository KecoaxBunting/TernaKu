<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class transactionType extends Model
{
    public function transaction():HasMany{
        return $this->hasMany(transaction::class);
    }
    use HasFactory;
}
