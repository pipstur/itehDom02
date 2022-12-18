<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ResursZoo;
use App\Models\Zoo;

class ZooController extends Controller
{
    public function index()
    {
        $zoos = Zoo::all();
        return ResursZoo::collection($zoos);
    }
    public function show(Zoo $zoo)
    {
        return new ResursZoo($zoo);
    }
}
