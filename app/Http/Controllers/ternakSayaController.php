<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\animalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ternakSayaController extends Controller
{
    public function show(){
        // $animals = DB::table('animals')->get();
        $animals = animal::all();
        //dd($animals[0]->animalType->animalName);
        return view('ternakSaya', compact('animals'));
    }
    public function addForm(){
        $animalTypes = animalType::all();
        return view('ternakSaya.add', compact('animalTypes'));
    }
    public function store(Request $request){
        $animal = new animal;
        $animal->animal_type_id = $request->animalType;
        $animal->birthDate = $request->birthDate;
        $animal->quantity = $request->quantity;
        $animal->farm_id = 1;
        //Auth::user()->farm_id;
        $animal->kesehatan = $request->kesehatan;

        if($request->file('foto')){
            $animal->foto = $request->file('foto')->store('animals');
        }

        $animal->save();
        return redirect('/ternakSaya');
    }

    public function editForm($id){
        $animal = animal::find($id);
        $animalTypes = animalType::all();
        return view('ternakSaya.edit', compact('animal'), compact('animalTypes'));
    }

    public function update(Request $request, $id){
        $animal = animal::find($id);
        $animal->animal_type_id = $request->animalType;
        $animal->birthDate = $request->birthDate;
        $animal->quantity = $request->quantity;
        $animal->farm_id = 1;
        //Auth::user()->farm_id;
        $animal->kesehatan = $request->kesehatan;

        if($request->file('foto')){
            Storage::delete('public/storage/' . $animal->foto);
            $animal->foto = $request->file('foto')->store('animals');
        }

        $animal->save();
        return redirect('/ternakSaya');
    }

    public function destroy($id){
        $animal = animal::find($id);
        $animal->delete();
        return redirect('/ternakSaya');
    }
}
