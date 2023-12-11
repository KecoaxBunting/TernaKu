<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\CssSelector\Node\FunctionNode;

class animal_gender extends Model
{
    public function animal():HasMany{
        return $this->hasMany(animal::class);
    }
    use HasFactory;
}
