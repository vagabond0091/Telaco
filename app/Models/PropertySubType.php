<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySubType extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'property_subtype',
        'property_type_id',
    ];
    public function PropertyType(){
        return $this->belongsTo(PropertyType::class);
    }
}
