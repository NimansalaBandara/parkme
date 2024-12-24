<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function index()
    {
        return response()->json(Driver::all(), 200);
    }

    public function store(Request $request)
    {
        $driver = Driver::create($request->all());
        return response()->json($driver, 201);
    }
}
