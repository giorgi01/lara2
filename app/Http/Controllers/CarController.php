<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function createCar(Request $request){
        Car::create([
            'name' => $request->get('name'),
            'make' => $request->get('make'),
            'model_name' => $request->get('model_name'),
            'license_number' => $request->get('license_number'),
            'weight' => $request->get('weight'),
            'registration_year' => $request->get('registration_year')
        ]);

        return redirect()->route('cars.index');
    }

    public function editCar(Request $request, $id)
    {
        $car = Car::where('id', $id)->first();

        return view('cars.edit')->with('car', $car);
    }

    public function updateCar(Request $request, $id)
    {

        $car = Car::find($id);
        $car->name = $request->get('name');
        $car->make = $request->get('make');
        $car->model_name = $request->get('model_name');
        $car->license_number = $request->get('license_number');
        $car->weight = $request->get('weight');
        $car->registration_year = $request->get('registration_year');
        $car->save();

        return redirect()->route('cars.index');
    }
}
