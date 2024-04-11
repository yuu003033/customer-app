<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karute extends Model
{
    use HasFactory;
    protected $fillable = [
        'visited_date',
        'category_id',
    ];
}