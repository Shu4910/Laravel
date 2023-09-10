<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PupuController extends Controller
{
    public function post(Request $request) {
        $data = [
            'user' => 'ゲスト',
        ];
        return view('pupu', $data);
    }
    

    public function index(Request $request)
    {
        $items = DB::select('select * from pupus'); // テーブル名をpipisからpupusに変更
        return view('index', ['items' => $items]);
    }

    public function create(Request $request) {
        // テーブルの仕様に合わせてバリデーションルールを追加
        $validatedData = $request->validate([
            'houjin' => 'required|string|max:64',
            'tanto' => 'required|string|max:64',
            'mail' => 'required|email|max:64',
            'tel' => 'required|string|max:128',
        ]);

        // 新しいテーブルのカラムに合わせてデータを挿入するSQL文を作成
        $sql = "insert into pupus (houjin, tanto, mail, tel) 
        values (:houjin, :tanto, :mail, :tel)";
        DB::insert($sql, $validatedData);

        return redirect('/pupost');
    }
}
