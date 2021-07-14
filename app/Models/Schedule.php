<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'date_schedule',
      
    ];
    public function Inquiry(){
        return $this->belongsToMany(Inquiry::class)->withTimestamps();
     }
}
