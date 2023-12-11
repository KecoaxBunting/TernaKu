<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class transaction_detail extends Model
{
    public function transaction_header():BelongsTo{
        return $this->belongsTo(transaction_header::class);
    }
    public function transaction_type():BelongsTo{
        return $this->belongsTo(transaction_type::class);
    }
    public function item():BelongsTo{
        return $this->belongsTo(item::class);
    }
    use HasFactory;
}
