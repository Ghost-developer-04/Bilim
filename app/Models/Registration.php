<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function whatSeason() {
        if ($this->lesson->season->name == 'Winter') {
            $season = '<span class="badge bg-primary-subtle text-success-emphasis">Winter</span>';
            return $season;
        }
        elseif ($this->lesson->season->name == 'Spring') {
            $season = '<span class="badge bg-success-subtle text-success-emphasis">Spring</span>';
            return $season;
        }
        elseif ($this->lesson->season->name == 'Summer') {
            $season = '<span class="badge bg-warning-subtle text-success-emphasis">Summer</span>';
            return $season;
        }
        elseif ($this->lesson->season->name == 'Autumn') {
            $season = '<span class="badge bg-danger-subtle text-success-emphasis">Autumn</span>';
            return $season;
        }
    }
}
