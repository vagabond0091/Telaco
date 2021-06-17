<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'property_subtype',
    ];
    public function PropertySubType(){
        return $this->hasMany(PropertySubType::class);
    }
}
