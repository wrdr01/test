<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function carsList() {
        $cars = Car::select('id', 'brand', 'model', 'price', 'photo_url')->get();
        return view('cars', compact('cars'));
    }

    public function car($id) {
        $car = Car::find($id);
        return view('car', compact('car'));
    }
}
