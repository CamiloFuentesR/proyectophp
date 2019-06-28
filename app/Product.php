<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    public function scopeName($query, $name){
        if($name )
        return $query->where('name','LIKE',"%$name%");
    }


}
