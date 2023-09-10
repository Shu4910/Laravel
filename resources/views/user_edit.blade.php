<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <!-- Tailwind CSSのCDNを追加（必要に応じて導入方法を変更してください） -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h2 class="text-2xl mb-6 text-center font-bold">Edit User</h2>

        <form action="{{ route('user.update', $user->id) }}" method="post" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender:</label>
                <input type="text" name="gender" value="{{ $user->gender }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-600">Address:</label>
                <input type="text" name="address" value="{{ $user->address }}" required class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div>
    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md transition duration-150 mb-2">Update</button>
    <a href="http://127.0.0.1:8000/profile" class="w-full block text-center bg-gray-300 hover:bg-gray-400 text-black p-2 rounded-md transition duration-150">戻る</a>
</div>

        </form>
    </div>
</div>

</body>
</html>
