<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

//    public $with =[
//        'cities',
//        'parts_of_the_world'
//    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function parts_of_the_world()
    {
        return $this->belongsTo(PartsOfTheWorld::class);
    }
}
