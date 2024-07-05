<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'note', 'is_done'];

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
}
