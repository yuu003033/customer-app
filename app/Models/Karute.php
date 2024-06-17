<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karute extends Model
{
    use HasFactory;
    protected $fillable = [
        'memo',
        'extention',
        'lashlift',
        'eyebrows',
        'upAndDown',
        'lowerEyelashes',
        'off',
        'rightUp',
        'leftUp',
        'rightDown',
        'leftDown',
        'eyebrowsRight',
        'eyebrowsLeft',
        'date'
        ,'imgPath'
    ];
}
