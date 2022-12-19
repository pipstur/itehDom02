<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ResursZoo;
use App\Models\Zoo;
use Illuminate\Support\Facades\Validator;

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
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'drzava_id' => 'required|integer',
            'adresa' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

       $zoo = Zoo::create([
            'naziv' => $request->naziv,
            'drzava_id' => $request->drzava_id,
            'adresa' => $request->adresa
       ]);


        return response()->json(['Novi Zoo kreiran', new ResursZoo($zoo)]);
    }
    public function destroy(Zoo $zoo)
    {
        $zoo->delete();
        return response()->json(['Država uspešno obrisana.', new ResursZoo($zoo)]);
    }
}
