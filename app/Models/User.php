<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    use HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'profession',
        'email',
        'phone',
        'address',
        'password',
    ];

    //one to one relationship
    public function contact(){
        return $this->hasOne(Contacts::class);
    }

    //one to many
    public function book(){
        return $this->hasMany(Book::class);
    }

    //many to many
    public function roles(){
        return $this->belongsToMany(Role::class,'user_role');
    }

    //has one through relationship

    public function userPhone(){
        return $this->hasOneThrough(PhoneNumber::class, Company::class);
    }
}
