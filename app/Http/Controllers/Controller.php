<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\PartsOfTheWorld;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get(Request $request){
        if (Auth::user()){

            $parts_ot_the_world = new PartsOfTheWorld();
            $data_parts_of_the_world = $parts_ot_the_world->get();

            $sort = $request->sort;
            $cities = new City();
            $data_cities = $cities->sort($sort);

            $data = [
                'parts_of_the_world' => $data_parts_of_the_world,
                'cities' => $data_cities
            ];

            return view('index', $data);
        } else {
            return view('login');
        }

    }

    public function login(Request $request){
        $user = new User();
        $user->login($request);
        return redirect('/');
    }

    public function logout(){
        $user = new User();
        $user->logout();
        return redirect('/');
    }

}
