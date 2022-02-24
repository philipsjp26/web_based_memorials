<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function pageLogin()
    {

        return view('pages.login');
    }
    public function pageRegister()
    {
        return view('pages.register');
    }
    public function pageForgotPassword()
    {
        return view('pages.forgotPassword');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            switch (auth()->user()->role) {
                case 'user':
                    # code...
                    return redirect()->intended('/');
                case 'admin':
                    return redirect()->intended('/admin/dashboard');
                default:
                    # code...
                    return redirect()->intended('/');
            }
        }
        Alert::error('Error', 'Invalid login');
        return back();
    }
    public function register(Request $request)
    {

        $req = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required'
        ]);
        if ($req->fails()) {
            Alert::error('Error', $req);
            return back();
        }
        $data = new Account;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->save();
        Alert::success('Success', 'You\'ve Successfully Registered');
        return view('pages.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
