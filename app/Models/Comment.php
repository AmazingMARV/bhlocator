<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'comment_id';
    protected $table = 'comments';

    protected $fillable = [
        'bhouse_id', 'user_id',
        'rating',
        'comment',
        

    ];
}
