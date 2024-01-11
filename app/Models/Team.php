<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    public $table = 'teams';
    protected $guarded = false;
    public function name(): HasMany
    {
        return $this->hasMany(Name::class);
    }
}
