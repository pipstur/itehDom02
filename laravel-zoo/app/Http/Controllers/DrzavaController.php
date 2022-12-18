<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drzava;
use App\Http\Resources\ResursDrzava;
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
    
}
