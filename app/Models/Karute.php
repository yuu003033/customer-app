<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karute extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
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
        'date',
        'imgPath'
    ];
    
    // Eloquentモデルでのデフォルト値の設定例
    protected $attributes = [
        'extention' => 'default_value_if_any',
        // 他のカラムに対するデフォルト値の設定
    ];
}
