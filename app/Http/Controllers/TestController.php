<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;  // この行を追加

class TestController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:tests'
        ]);
    
        Test::create($data);
    
        return redirect()->back()->with('success', 'データが保存されました');
    }
    
}
