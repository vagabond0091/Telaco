<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'property_inquiry',
      
    ];
    public function User(){
         
        return $this->belongsToMany(User::class)->withTimestamps();
     }
     public function Property(){
        return $this->belongsToMany(Property::class)->withTimestamps();
     }
     public function Schedule(){
      return $this->belongsToMany(Schedule::class)->withTimestamps();
  }
}
