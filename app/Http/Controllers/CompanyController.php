<?php

// app/Http/Controllers/CompanyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;  // あとでモデルを作成します

class CompanyController extends Controller
{
    public function create()
    {
        return view('company_form');
    }

    public function store(Request $request)
    {
        // バリデーション、データの保存などのロジックをここに記述します
        // ...（後で詳しく説明します）
    }
}
