<?php

namespace App\Http\Controllers;

use App\Models\farm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class farmController extends Controller
{
    public function show(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        return view('farm');
    }
    public function store(Request $request){
        $message = [
            'required'=>':attribute harus diisi'
        ];

        $request->validate([
            'farmName' => 'required',
            'location' => 'required'
        ], $message);

        $farm = new farm;
        $farm->farmName = $request->farmName;
        $farm->location = $request->location;
        $farm->user_id = Auth::user()->id;

        $account = User::find($farm->user_id);
        $account->farm_id = $farm->user_id;

        $farm->save();
        $account->save();
        return redirect('/ternakSaya');
    }
}
