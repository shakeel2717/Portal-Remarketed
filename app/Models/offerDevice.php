<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offerDevice extends Model
{
    use HasFactory;


    public function device()
    {
        return $this->belongsTo(device::class);
    }
}
