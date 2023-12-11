<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    public function animal_detail():BelongsTo{
        return $this->belongsTo(animal_detail::class);
    }
    use HasFactory;
}
