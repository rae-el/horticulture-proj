<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'genus',
        'species',
        'common',
        'description',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
