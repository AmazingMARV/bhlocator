<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    use HasFactory;

    protected $primaryKey = 'bedroom_id';
    protected $table = 'bedrooms';

    protected $fillable = [
        'bhouse_id', 'bedroom_name',
        'bed_amenities',
        'bed_img',
        'price',
        'is_available'

    ];
}
