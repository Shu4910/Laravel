<form action="{{ route('test.store') }}" method="post">
    @csrf
    <label for="name">名前:</label>
    <input type="text" name="name" required>
    <label for="email">メールアドレス:</label>
    <input type="email" name="email" required>
    <button type="submit">保存</button>
</form>
