<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestDisease extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'description',
        'treatment_type',
        'treatment_name',
        'treatment_dosage',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    ///create the other tables before functions about belonging
}
