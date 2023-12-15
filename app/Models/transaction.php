<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transaction extends Model
{
    public function farm():BelongsTo{
        return $this->belongsTo(farm::class);
    }
    public function transactionType():BelongsTo{
        return $this->belongsTo(transactionType::class);
    }
    use HasFactory;
}
