<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class CompanyAuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('company.register');
    }

    public function register(Request $request)
    {
        // Validation...
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login the company
        auth()->guard('company')->login($company);

        return redirect()->route('company.dashboard');
    }

    public function showLoginForm()
    {
        return view('company.login');
    }

    public function login(Request $request)
    {
        // Validation...
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (auth()->guard('company')->attempt($request->only('email', 'password'))) {
            return redirect()->route('company.dashboard');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}

