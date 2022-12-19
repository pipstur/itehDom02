<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drzava;
use App\Http\Resources\ResursDrzava;
use Illuminate\Support\Facades\Validator;

class DrzavaController extends Controller
{
    public function index(){
        #return Drzava::all();
        return ResursDrzava::collection(Drzava::all());
    }
    public function show($drzava_id){
        $drzava = Drzava::find($drzava_id);
        if(is_null($drzava)){
            return response()->json('ID ne postoji', 404);
        }
        return response()->json($drzava);
    }
    public function update(Request $request, Drzava $drzava)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'broj_stanovnika' => 'required|integer',
            'predsednik' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $drzava->ime = $request->ime;
        $drzava->broj_stanovnika = $request->broj_stanovnika;
        $drzava->predsednik = $request->predsednik;

        $drzava->save();

        return response()->json(['Država uspešno izmenjena.', new ResursDrzava($drzava)]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'broj_stanovnika' => 'required|integer',
            'predsednik' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

       $drzava = Drzava::create([
            'ime' => $request->ime,
            'broj_stanovnika' => $request->broj_stanovnika,
            'predsednik' => $request->predsednik
       ]);


        return response()->json(['Drzava kreirana', new ResursDrzava($drzava)]);
    }
    public function destroy(Drzava $drzava)
    {
        $drzava->delete();
        return response()->json(['Država uspešno obrisana.', new ResursDrzava($drzava)]);
    }
}
