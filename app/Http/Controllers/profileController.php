<?php

namespace App\Http\Controllers;

use App\Models\farm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function show(){
        if(Auth::check()==false){
            return redirect('/masuk');
        }
        $account = User::find(Auth::user()->id);
        $farm = farm::find($account->farm_id);
        return view('profile', compact('account', 'farm'));
    }

    public function update(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'email' => ':attribute harus berupa email'
        ];

        $request->validate([
            'email' => 'required|email',
            'farmName' => 'required',
            'location' => 'required'
        ], $messages);

        $account = User::find(Auth::user()->id);
        $farm = farm::find($account->farm_id);

        $account->email = $request->email;
        $account->password;
        $farm->farmName = $request->farmName;
        $farm->location = $request->location;

        $account->save();
        $farm->save();
        return redirect('/profil')->with('message', 'Data berhasil diupdate');
    }

    public function changePassword(Request $request){
        $account = User::find(Auth::user()->id);
        $messages = [
            'required' => ':attribute harus diisi',
            'confirmed' => 'kata sandi baru dan konfirmasi kata sandi tidak sama',
            'different' => 'kata sandi baru harus berbeda dengan kata sandi lama'
        ];

        $request->validate([
            'oldPassword' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value != Auth::user()->password) {
                        $fail('Kata sandi lama tidak sama');
                    }
                }
            ],
            'password' => [
                'required', 'confirmed', 'different:oldPassword'
            ]
        ], $messages);

        $account->email;
        //$account->password = Hash::make($request->password);
        $account->password = $request->password;
        $account->save();
        return redirect('/profil')->with('message', 'Kata sandi berhasil diupdate');
    }
}
