@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="gender">性別</label>
            <input type="text" id="gender" name="gender" value="{{ $user->gender }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="address">住所</label>
            <textarea id="address" name="address" class="form-control">{{ $user->address }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
@endsection
