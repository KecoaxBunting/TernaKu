<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute harus diisi'
        ];

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], $message);

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Email dan password salah'
            ]);
        }
        
        return redirect('/ternakSaya');
    }

    public function destroy(){
        auth()->logout();
        
        return redirect('/');
    }
}
