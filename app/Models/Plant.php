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

    ///create the other tables eg. motherstock
    /// then create the functions regarding belonging
    /// eg.
    /// public function motherstock(){
    ///     return $this -> belongsToMany(MotherStock::class);
    /// }
}
