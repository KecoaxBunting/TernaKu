<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class signInController extends Controller
{
    public function show(){
        return view('register');
    }

    public function store(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus berupa angka',
            'gt' => ':attribute harus lebih dari 0 (nol)',
            'mimes' => ':attribute harus berupa .jpeg atau .png, atau .jpg',
            'max' => ':attribute melewati limit',
            'confirmed' => 'password dan konfirmasi password tidak sama'
        ];

        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ], $messages);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();
        
        auth()->login($user);
        
        // if (Auth::attempt($user)) {
        //     // Authentication passed...
        //     return redirect('farm');
        // }
        return redirect('/ternak');
    }
}
