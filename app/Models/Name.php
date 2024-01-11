<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Name extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'last_name', 'type_id', 'team_id'
    ];
}
