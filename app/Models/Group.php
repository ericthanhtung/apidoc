<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'name',
        'group_id',
    ];


    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
