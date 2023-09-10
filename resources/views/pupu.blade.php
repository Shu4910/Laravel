<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Your Title</title>
    
</head>
<body class="bg-blue-100 font-sans">
<div class="max-w-2xl mx-auto mt-10 p-8 bg-white rounded-xl shadow-lg">
    <form action="puinsert" id="create-account" method="POST" class="space-y-6">
    @csrf
<h1 class="text-2xl font-bold text-blue-600 mb-4">{{$user}}さん、会社情報を記録しましょう</h1>

<div>
    <label for="houjin" class="block text-sm font-medium text-blue-600">法人名</label>
    <input type="text" id="houjin" name="houjin" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
</div>

<div>
    <label for="tanto" class="block text-sm font-medium text-blue-600">担当者</label>
    <input type="text" id="tanto" name="tanto" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
</div>

<div>
    <label for="mail" class="block text-sm font-medium text-blue-600">メールアドレス</label>
    <input type="email" id="mail" name="mail" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
</div>

<div>
    <label for="tel" class="block text-sm font-medium text-blue-600">電話番号</label>
    <input type="text" id="tel" name="tel" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
</div>

<div class="text-right">
        <input type="submit" class="submit bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-lg transition duration-200" value="記録する">
    </div>
    </form>
    </div>

</body>
