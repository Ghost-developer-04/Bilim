<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
