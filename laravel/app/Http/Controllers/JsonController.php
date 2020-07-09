<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class JsonController extends Controller{
        public function json(){
                $locations = Location::all()->toJson();
                return $locations;
        }
}
