<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    // to allow mass assignment
    protected $fillable = [
        'name',
        'score',
    ];
}
