<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemOrder extends Model
{
    use HasFactory;
    protected $table = 'item_orders';
    protected $primaryKey = 'id';



    public function user()
    {
        return $this->belongsTo(users::class);
    }

    public function device()
    {
        return $this->hasMany(device::class);
    }
}
