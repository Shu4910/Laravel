<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; //←追加。DB接続に必要なクラスをインポートする。

class PostController extends Controller
{
    //アクションメソッドの追加
    public function post(Request $request) {
        $data = [
            'user'=>'ゲスト',
        ];
        return view('post', $data); //viewsフォルダのpostファイルに$dataを渡しつつページ表示する
    }

    public function index(Request $request)
    {
        $items = DB::select('select * from pipis');
        return view('index', ['items' => $items]);
    }

    
    //こちらを追加。formの値を取得し$paramに代入
    public function create(Request $request) {

            // ここでバリデーションを追加
            $validatedData = $request->validate([
                'live_date' => 'required|date',
                'musician' => 'required|string|max:255',
                'venue' => 'required|string|max:255',
                'text' => 'required|string|max:1000', // 1000文字までとした
            ]);
    
        $param = [
            'live_date' => $request->live_date, //取得したいデータをinput要素のname属性
            'musician' => $request->musician,
            'venue' => $request->venue,
            'text' => $request->text,
        ];
        //DBに接続しデータを挿入する。第１パラメータにSQL文、第２に$paramを。
        DB::insert('insert into pipis (live_date, musician, venue, text, created_at) values (:live_date, :musician, :venue, :text, NOW())', $param);
        //トップページに遷移する
        return redirect('/post');
    }
}