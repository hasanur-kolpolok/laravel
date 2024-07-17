<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use HasUuids;
    public $timestamps = false;
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
