<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','country_id','avatar','seal'
    ];

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
}
