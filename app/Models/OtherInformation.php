<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'bedrooms',
        'baths',
        'floorarea',
        'lot_number',
        'subdivision',
        'total_room',
        'car_space',
        'total_floor',
        'property_id'
    ];
    public function Property(){
        return $this->belongsTo(Property::class);
    } 
}