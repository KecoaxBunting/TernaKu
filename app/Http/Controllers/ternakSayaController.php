<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\animalType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ternakSayaController extends Controller
{
    public function show(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        //dd(Auth::user(),Auth::check());
        $animals = animal::where('farm_id', Auth::user()->farm_id)->get();
        return view('ternakSaya', compact('animals'));
    }
    public function addForm(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        return view('ternakSaya.add');
    }
    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'date'    => ':attribute harus berupa tanggal',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'in' => ':attribute harus diisi "sangat sehat" atau "sehat" atau "sakit"',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => 'Maksimal ukuran gambar adalah 5 mb'
        ];

        $request->validate([
            'animalName' => 'required',
            'birthDate' => 'required|date',
            'quantity' => 'required|numeric|gt:0',
            'kesehatan' => 'required|in:sangat sehat,sehat,sakit',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $animal = new animal;
        $animal->animalName = $request->animalName;
        $animal->birthDate = $request->birthDate;
        $animal->quantity = $request->quantity;
        $animal->farm_id = Auth::user()->farm_id;
        $animal->kesehatan = $request->kesehatan;

        if($request->file('foto')){
            $animal->foto = $request->file('foto')->store('animals');
        }

        $animal->save();
        return redirect('/ternakSaya')->with('message', 'Hewan ternak berhasil ditambahkan');
    }

    public function detail($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $animal = animal::find($id);
        return view('ternakSaya.detail', compact('animal'));
    }
    public function editForm($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $animal = animal::find($id);
        return view('ternakSaya.edit', compact('animal'));
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
            'date'    => ':attribute harus berupa tanggal',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'in' => ':attribute harus diisi "sangat sehat" atau "sehat" atau "sakit"',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => 'Maksimal ukuran gambar adalah 5 mb'
        ];

        $request->validate([
            'animalName' => 'required',
            'birthDate' => 'required|date',
            'quantity' => 'required|numeric|gt:0',
            'kesehatan' => 'required|in:sangat sehat,sehat,sakit',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $animal = animal::find($id);
        $animal->animalName = $request->animalName;
        $animal->birthDate = $request->birthDate;
        $animal->quantity = $request->quantity;
        $animal->farm_id = Auth::user()->farm_id;
        $animal->kesehatan = $request->kesehatan;

        if($request->file('foto')){
            Storage::delete($animal->foto);
            $animal->foto = $request->file('foto')->store('animals');
        }

        $animal->save();
        return redirect('/ternakSaya')->with('message', 'Hewan ternak berhasil diupdate');
    }

    public function destroy($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $animal = animal::find($id);
        $animal->delete();
        Storage::delete($animal->foto);
        return redirect('/ternakSaya')->with('message', 'Hewan ternak berhasil dihapus');
    }
}
