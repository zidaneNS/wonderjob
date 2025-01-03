<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JobList extends Model
{
    /** @use HasFactory<\Database\Factories\JobListFactory> */
    use HasFactory;

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function requirement (string $name): void
    {
        $requirement = Requirement::firstOrCreate(['name' => strtolower($name)]);
        $this->requirements()->attach($requirement);
    }

    public function requirements (): BelongsToMany
    {
        return $this->belongsToMany(Requirement::class);
    }
}
