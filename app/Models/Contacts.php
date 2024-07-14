<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    use HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'village',
        'thana',
        'city',
        'district',
        'user_id'
    ];

    //inverse of the relationship of 1 to 1
    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
