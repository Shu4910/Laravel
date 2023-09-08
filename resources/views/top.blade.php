{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- ヘッダー呼び出し --}}
@include('common.header')
{{-- メイン部分作成 --}}
@section('content')
    <h1 class="text-2xl">トップ画面</h1>
@endsection
{{-- フッター呼び出し --}}
@include('common.footer')