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
        public function edit($id){
                $location = Location::find($id);
                return  view('edit', ['location'=> $location]);
        }
        public function update($id){
                $location = Location::find($id);
                $location->name = request('name');
                $location->email = request('email');
                $location->location = request('location');
                $location->bread = request('bread');
                $location->milk = request('milk');
                $location->eggs = request('eggs');
                $location->fruit = request('fruit');
                $location->tp = request('tp');
                $location->pads = request('pads');
                $location->soap = request('soap');
                $location->cleaner = request('cleaner');
                $location->cost = request('cost');
                $location->busy = request('busy');
                $location->save();
                return view('locations.show', ['location'=> $location]);
        }
        public function delete($id){
                Location::find($id)->delete();
                return redirect('/location')->with('message', 'Done.');
        }
}
