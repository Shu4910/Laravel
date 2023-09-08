<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // バリデーション
        $request->validate([
            'mail' => 'required|email',
            'pass' => 'required',
        ]);

        // 認証
        if (Auth::attempt(['email' => $request->mail, 'password' => $request->pass])) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'loginError' => 'Eメールまたはパスワードが間違っています。'
        ]);
    }
}
