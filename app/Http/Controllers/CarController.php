<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create() {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            // ... otras validaciones
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index');
    }

    // ... otros métodos para actualizar, eliminar, etc.
}
