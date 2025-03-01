<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    use HasUuids;
    public $timestamps = false;
    
    public function users(){
        return $this->belongsToMany(User::class,'user_role');
    }
}
