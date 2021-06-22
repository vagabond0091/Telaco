<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indoor extends Model
{
    use HasFactory;
    public function Property(){
        return $this->belongsToMany(Property::class)->withTimestamps();
     }
}
