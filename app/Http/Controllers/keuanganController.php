<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Models\transactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class keuanganController extends Controller
{
    public function show(){
        $transactions = transaction::all();
        $in = transaction::where('transaction_type_id', 1)->get();
        $in_total = $in->sum('price');
        $out = transaction::where('transaction_type_id', 2)->get();
        $out_total = $out->sum('price');
        return view('keuangan', compact(['transactions', 'in_total', 'out_total']));
    }
    public function addForm(){
        $transactionTypes = transactionType::all();
        return view('keuangan.add', compact('transactionTypes'));
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
            'transactionName' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'transactionType' => 'required',
            'note' => 'max:255',
            'transactionDate' => 'date',
            'foto' => 'required|mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $transaction = new transaction;
        $transaction->transactionName = $request->transactionName;
        $transaction->price = $request->price;
        $transaction->transaction_type_id = $request->transactionType;
        $transaction->note = $request->note;
        $transaction->transactionDate = $request->transactionDate;
        $transaction->farm_id = 1;

        if($request->file('foto')){
            $transaction->foto = $request->file('foto')->store('transactions');
        }

        $transaction->save();
        return redirect('/keuangan')->with('message', 'Transaksi berhasil ditambahkan');
    }

    public function detail($id){
        $transaction = transaction::find($id);
        return view('keuangan.detail', compact('transaction'));
    }
    public function editForm($id){
        $transaction = transaction::find($id);
        $transactionTypes = transactionType::all();
        return view('keuangan.edit', compact(['transaction', 'transactionTypes']));
    }

    public function update(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute melewati limit'
        ];

        $request->validate([
            'transactionName' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'transactionType' => 'required',
            'note' => 'max:255',
            'transactionDate' => 'date',
            'foto' => 'mimes:jpeg,png,jpg|max:5120'
        ], $messages);

        $transaction = transaction::find($id);
        $transaction->transactionName = $request->transactionName;
        $transaction->price = $request->price;
        $transaction->transaction_type_id = $request->transactionType;
        $transaction->note = $request->note;
        $transaction->transactionDate = $request->transactionDate;
        $transaction->farm_id = 1;

        if($request->file('foto')){
            Storage::delete($transaction->foto);
            $transaction->foto = $request->file('foto')->store('transactions');
        }

        $transaction->save();
        return redirect('/keuangan')->with('message', 'Transaksi berhasil diupdate');
    }

    public function destroy($id){
        $transaction = transaction::find($id);
        $transaction->delete();
        Storage::delete($transaction->foto);
        return redirect('/keuangan')->with('message', 'Transaksi berhasil dihapus');
    }
}
