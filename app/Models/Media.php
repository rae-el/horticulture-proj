<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'file',
        'link',
        'image_description'
    ];

    protected $hidden = [];

    protected $casts = [];

    public function plant()
    {
        return $this->belongsToMany(Plant::class);
    }

    public function pestdisease()
    {
        return $this->belongsToMany(PestDisease::class);
    }

}
