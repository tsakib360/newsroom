<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginProcess(LoginRequest $request)
    {
        $remember_me = $request->has('remember') ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
            return redirect()->route('admin_dashboard')->with('toast_success', __('Successfully Login!'));
        }
        return redirect()->route('login')->withInput()->with('toast_error', __('Wrong Credential!'));
    }

    public function logout()
    {
        if (Auth::check()) {

            Auth::logout();
            return redirect()->route('login')->with('toast_success', __('Logout Successfully Done!'));
        }
        return redirect()->back()->with('toast_error', __('You are not in login. Please login first!'));
    }
}
