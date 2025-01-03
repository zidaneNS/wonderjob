<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Requirement extends Model
{
    /** @use HasFactory<\Database\Factories\RequirementFactory> */
    use HasFactory;

    public function joblist (): BelongsToMany
    {
        return $this->belongsToMany(JobList::class);
    }
}
