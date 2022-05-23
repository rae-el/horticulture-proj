<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    use HasFactory;

    protected $fillable = [
        'plant_id',
        'location_id',
        'block_number',
        'row_number',
        'quantity',
        'date_of_stock',
    ];
}
