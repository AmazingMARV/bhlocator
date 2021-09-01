<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bhouse extends Model
{
    use HasFactory;

    protected $primaryKey = 'bhouse_id';
    protected $table = 'bhouses';

    protected $fillable = [
        'user_id', 'bhouse_name', 'bhouse_desc',
        'bhouse_img',
        'bhouse_rules',
        'loc_description',
        'loc_x', 'loc_y'
    ];
}
