<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

//    public $with =[
//        'country'
//    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function sort($sort){
        switch ($sort) {
            case 'sort_city':
                $data_cities = City::orderBy('title')->get();
                break;
            case 'population_sort':
                $data_cities = City::orderBy('population', 'DESC')->get();
                break;
            default:
                $data_cities = City::all();
                break;
        }

        return $data_cities;
    }
}
