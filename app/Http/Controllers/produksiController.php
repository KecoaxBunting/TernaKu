<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class produksiController extends Controller
{
    public function show(){
        $products = product::all();
        return view('produksi', compact('products'));
    }
    public function addForm(){
        return view('produksi.add');
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
            'productName' => 'required|string',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $product = new product;
        $product->productName = $request->productName;
        $product->quantity = $request->quantity;

        if($request->file('foto')){
            $product->foto = $request->file('foto')->store('products');
        }

        $product->save();
        return redirect('/produksi')->with('message', 'Produk berhasil ditambahkan');
    }

    public function detail($id){
        $product = product::find($id);
        return view('produksi.detail', compact('product'));
    }
    public function editForm($id){
        $product = product::find($id);
        return view('produksi.edit', compact('product'));
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
            'productName' => 'required|string',
            'quantity' => 'required|numeric|gt:0',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $product = product::find($id);
        $product->productName = $request->productName;
        $product->quantity = $request->quantity;

        if($request->file('foto')){
            Storage::delete($product->foto);
            $product->foto = $request->file('foto')->store('products');
        }

        $product->save();
        return redirect('/produksi')->with('message', 'Produk berhasil diupdate');
    }

    public function destroy($id){
        $product = product::find($id);
        $product->delete();
        Storage::delete($product->foto);
        return redirect('/produksi')->with('message', 'Produk berhasil dihapus');
    }
}
