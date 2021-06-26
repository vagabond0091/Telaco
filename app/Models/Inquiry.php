<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email'
    ];
    use HasFactory;
    public function Property(){
        return $this->belongsToMany(Property::class)->withTimestamps();
     }
}
