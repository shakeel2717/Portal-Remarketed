<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(users::class);
    }

    // public function itemOrder()
    // {
    //     return $this->belongsTo(itemOrder::class);
    // }
    public function itemOrder()
    {
        return $this->hasMany(itemOrder::class);
    }
}
