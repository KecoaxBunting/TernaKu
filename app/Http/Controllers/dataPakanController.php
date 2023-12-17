<?php

namespace App\Http\Controllers;

use App\Models\feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dataPakanController extends Controller
{
    public function show(){
        $feeds = feed::all();
        return view('dataPakan', compact('feeds'));
    }
    public function addForm(){
        return view('dataPakan.add');
    }
    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => 'Maksimal ukuran gambar adalah 5 mb'
        ];

        $request->validate([
            'feedName' => 'required|string',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $feed = new feed;
        $feed->feedName = $request->feedName;
        $feed->quantity = $request->quantity;

        if($request->file('foto')){
            $feed->foto = $request->file('foto')->store('feeds');
        }

        $feed->save();
        return redirect('/dataPakan')->with('message', 'Pakan berhasil ditambahkan');
    }

    public function detail($id){
        $feed = feed::find($id);
        return view('dataPakan.detail', compact('feed'));
    }
    public function editForm($id){
        $feed = feed::find($id);
        return view('dataPakan.edit', compact('feed'));
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => 'Maksimal ukuran gambar adalah 5 mb'
        ];

        $request->validate([
            'feedName' => 'required|string',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $feed = feed::find($id);
        $feed->feedName = $request->feedName;
        $feed->quantity = $request->quantity;

        if($request->file('foto')){
            Storage::delete($feed->foto);
            $feed->foto = $request->file('foto')->store('feeds');
        }

        $feed->save();
        return redirect('/dataPakan')->with('message', 'Pakan berhasil diupdate');
    }

    public function destroy($id){
        $feed = feed::find($id);
        $feed->delete();
        Storage::delete($feed->foto);
        return redirect('/dataPakan')->with('message', 'Pakan berhasil dihapus');
    }
}
