<?php

namespace App\Http\Controllers;

use App\Models\PartsOfTheWorld;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PartsOfTheWorldController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
