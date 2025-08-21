<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Vehicle;
use App\Models\Motorcycle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carCategories = Category::where('type', 'car')->get();
        $motorcycleCategories = Category::where('type', 'motorcycle')->get();
        
        $featuredVehicles = Vehicle::where('in_stock', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
            
        $featuredMotorcycles = Motorcycle::where('in_stock', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('home', compact('carCategories', 'motorcycleCategories', 'featuredVehicles', 'featuredMotorcycles'));
    }
}