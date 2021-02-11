<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $carAll = Car::all();
        $carCheap = Car::where('price', '<', '4000')->get();
        $carExp = Car::where('price', '>', '4000')->get();
        $carDisc = Car::where('discount', '!=', 'NULL')->get();
        return view('welcome', compact('carAll', 'carCheap', 'carExp', 'carDisc'));
    }

    public function store(Request $request)
    {
        $newEntry = new Car;
        $newEntry->brand = $request->brand;
        $newEntry->year = $request->year;
        $newEntry->color = $request->color;
        $newEntry->price = $request->price;
        $newEntry->discount = $request->discount;
        $newEntry->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Car::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
