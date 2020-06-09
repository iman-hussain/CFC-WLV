<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class SubmitController extends Controller{
        public function submit(){
                return view('submit');
        }
        public function store(){
                $location = new Location();
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
                return redirect('/location');
        }
}
