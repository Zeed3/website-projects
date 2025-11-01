<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landingPage(){
        $cars = Car::all();
        $car = null;
        return view('landing', compact('cars', 'car'));
    }

    public function landingWithId($id){
        $cars = null;
        $car = Car::findOrFail($id);
        return view('landing', compact('cars', 'car'));
    }
}
