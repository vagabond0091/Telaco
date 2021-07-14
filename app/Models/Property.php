<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Auth;
class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'province',
        'city',
        'address',
        'latitude',
        'longtitude',
        'showroom_img',
        'price',
        'status',
        'property_subtype',
        'property_type_id',
    ];
    
    public function Indoor(){
        return $this->belongsToMany(Indoor::class)->withTimestamps();
     }
     
     public function Outdoor(){
        return $this->belongsToMany(Outdoor::class)->withTimestamps();
     }
     public function PropertyType(){
        return $this->hasMany(PropertyType::class);
    }
    public function PropertySubType(){
        return $this->hasMany(PropertySubType::class);
    }
    public function OtherInformation(){
        return $this->hasOne(OtherInformation::class);
    }
    public function Inquiry(){
        return $this->belongsToMany(Inquiry::class)->withTimestamps();
     }
     public function Maintenance(){
        return $this->belongsToMany(Maintenance::class)->withTimestamps();
     }
     public function User(){
         
        return $this->belongsToMany(User::class)->withTimestamps();
     }
    
}
