<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'id',
        'scenario',
        'maintenance_type'
    ];
    use HasFactory;
    public function Property(){
        return $this->belongsToMany(Property::class)->withTimestamps();
     }
     public function User(){
        return $this->belongsToMany(User::class)->withTimestamps();
     }
}
