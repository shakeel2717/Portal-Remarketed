<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'username',
        'email',
        'password',
        'status',
    ];



    public function order()
    {
        return $this->hasMany(order::class);
    }

    public function itemOrder()
    {
        return $this->hasMany(itemOrder::class);
    }

    public function address()
    {
        return $this->hasMany(address::class);
    }
}
