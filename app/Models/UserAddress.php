<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','default','name','email','mobile','country','city','pincode','address'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
