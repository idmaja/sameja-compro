<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // $credentials = $request->validate([
        //     'username' => ['required'],
        //     'password' => ['required'],
        // ]);

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('auth.login')->with('failed', 'Username atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
