<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class animal extends Model
{
    public function farm():BelongsTo{
        return $this->belongsTo(farm::class);
    }
    public function animal_gender():BelongsTo{
        return $this->belongsTo(animal_gender::class);
    }
    public function animal_detail():BelongsTo{
        return $this->belongsTo(animal_detail::class);
    }
    use HasFactory;
}
