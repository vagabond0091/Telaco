<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'avatar_original'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Maintenance(){
        return $this->belongsToMany(Maintenance::class)->withTimestamps();
     }
     public function Property(){
        return $this->belongsToMany(Property::class)->withTimestamps();
     }
     public function Inquiry(){
         
        return $this->belongsToMany(Inquiry::class)->withTimestamps();
     }
     public function Schedule(){
         
        return $this->belongsToMany(Schedule::class)->withTimestamps();
     }
    

}
