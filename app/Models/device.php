<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class device extends Model
{
    use HasFactory;
    protected $table = 'devices';
    protected $primaryKey = 'id';
    protected $fillable = [
        'brand',
        'name',
        'appearance',
        'functionality',
        'color',
        'boxed',
        'additionalInfo',
        'qty',
        'price',
    ];


    public function user()
    {
        return $this->belongsTo(users::class);
    }


    public function itemOrder()
    {
        return $this->belongsTo(itemOrder::class);
    }
}
