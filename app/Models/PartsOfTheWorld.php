<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsOfTheWorld extends Model
{
    use HasFactory;

//    public $with =[
//        'countries'
//    ];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }


    public function get(){
        $data = PartsOfTheWorld::all();
        return $data;
    }
}
