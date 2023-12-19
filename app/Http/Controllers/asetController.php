<?php

namespace App\Http\Controllers;

use App\Models\asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class asetController extends Controller
{
    public function show(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $assets = asset::where('farm_id', Auth::user()->farm_id)->get();
        return view('aset', compact('assets'));
    }
    public function addForm(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        return view('aset.add');
    }
    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute tidak lebih dari 5mb',
            'in' => ':attribute harus diisi "sangat baik" atau "baik" atau "rusak"'
        ];

        $request->validate([
            'assetName' => 'required',
            'status' => 'required|in:sangat baik,baik,rusak',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $asset = new asset;
        $asset->assetName = $request->assetName;
        $asset->status = $request->status;
        $asset->quantity = $request->quantity;
        $asset->farm_id = Auth::user()->farm_id;

        if($request->file('foto')){
            $asset->foto = $request->file('foto')->store('assets');
        }

        $asset->save();
        return redirect('/aset')->with('message', 'Aset berhasil ditambahkan');
    }

    public function detail($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $asset = asset::find($id);
        return view('aset.detail', compact('asset'));
    }
    public function editForm($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $asset = asset::find($id);
        return view('aset.edit', compact('asset'));
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute tidak lebih dari 5mb',
            'in' => ':attribute harus diisi "sangat baik" atau "baik" atau "rusak"'
        ];

        $request->validate([
            'assetName' => 'required',
            'status' => 'required|in:sangat baik,baik,rusak',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $asset = asset::find($id);
        $asset->assetName = $request->assetName;
        $asset->status = $request->status;
        $asset->quantity = $request->quantity;
        $asset->farm_id = Auth::user()->farm_id;

        if($request->file('foto')){
            Storage::delete($asset->foto);
            $asset->foto = $request->file('foto')->store('assets');
        }

        $asset->save();
        return redirect('/aset')->with('message', 'Aset berhasil diupdate');
    }

    public function destroy($id){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $asset = asset::find($id);
        $asset->delete();
        Storage::delete($asset->foto);
        return redirect('/aset')->with('message', 'Aset berhasil dihapus');
    }
}
