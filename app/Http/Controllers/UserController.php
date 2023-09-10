<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user_profile', ['user' => $user]);
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('user_edit', ['user' => $user]);
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $validatedData = $request->validate([
        'gender' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
    ]);

    $user->update($validatedData);

    return redirect()->route('user.edit', $id)->with('success', '情報が更新されました');
}

}

