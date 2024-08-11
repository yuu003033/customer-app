<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    use HasFactory;
    protected $fillable=[ 
        'name',
        'telephone',
        'zipcode',
        'prefecture',
        'city',
        'status',
        'deleted_at'
    ];
    public function karutes(){
        return $this->hasMany('App\Models\Karute','customer_id', 'id');
    }
}
