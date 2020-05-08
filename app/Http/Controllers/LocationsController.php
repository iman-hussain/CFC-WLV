<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationsController extends Controller{
        public function index(){
                $locations = Location::Latest()->get();
                return view('locations.index', ['locations'=>$locations]);
        }
        public function show($id){
                $location = Location::find($id);
                return  view('locations.show', ['location'=> $location]);
        }
}
