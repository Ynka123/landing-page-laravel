<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class watchlist extends Model
{
    protected $fillable = [
        'judul','genre', 'pengguna_name'
    ];

    public function pengguna(): BelongsTo
    {
        return $this->belongsTo(pengguna::class);
    }
}
