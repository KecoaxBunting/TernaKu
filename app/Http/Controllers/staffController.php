<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class staffController extends Controller
{
    public function show(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $staffs = staff::where('farm_id', Auth::user()->farm_id)->get();
        return view('staff', compact('staffs'));
    }
    public function addForm(){
        $roles = role::all();
        return view('staff.add', compact('roles'));
    }
    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute melewati limit',
            'date' => ':attribute harus berupa tanggal'
        ];

        $request->validate([
            'staffName' => 'required',
            'age' => 'required|numeric|gt:0',
            'phone' => 'required',
            'address' => 'required|max:255',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $staff = new staff;
        $staff->staffName = $request->staffName;
        $staff->age = $request->age;
        $staff->phone = $request->phone;
        $staff->address = $request->address;
        $staff->role_id = $request->role;
        $staff->farm_id = Auth::user()->farm_id;

        if($request->file('foto')){
            $staff->foto = $request->file('foto')->store('staffs');
        }

        $staff->save();
        return redirect('/staff')->with('message', 'Staff berhasil ditambahkan');
    }

    public function detail($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $staff = staff::find($id);
        return view('staff.detail', compact('staff'));
    }
    public function editForm($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $staff = staff::find($id);
        $roles = role::all();
        return view('staff.edit', compact(['staff', 'roles']));
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute melewati limit',
            'date' => ':attribute harus berupa tanggal'
        ];

        $request->validate([
            'staffName' => 'required',
            'age' => 'required|numeric|gt:0',
            'phone' => 'required',
            'address' => 'required|max:255',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $staff = staff::find($id);
        $staff->staffName = $request->staffName;
        $staff->age = $request->age;
        $staff->address = $request->address;
        $staff->role_id = $request->role;
        $staff->farm_id = Auth::user()->farm_id;

        if($request->file('foto')){
            Storage::delete($staff->foto);
            $staff->foto = $request->file('foto')->store('staffs');
        }

        $staff->save();
        return redirect('/staff')->with('message', 'Staff berhasil diupdate');
    }

    public function destroy($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $staff = staff::find($id);
        $staff->delete();
        Storage::delete($staff->foto);
        return redirect('/staff')->with('message', 'Staff berhasil dihapus');
    }
}
