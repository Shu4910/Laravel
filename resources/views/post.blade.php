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
    <form action="insert" id="create-account" method="POST" class="space-y-6">
      @csrf
      <h1 class="text-2xl font-bold text-blue-600 mb-4">{{$user}}さん、ライブの感想を記録しましょう</h1>
      

      <div>
    <label for="live_date" class="block text-sm font-medium text-blue-600">ライブに行った日</label>
    <input type="date" id="live_date" name="live_date" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
    @error('live_date')
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>


      <div>
        <label for="musician" class="block text-sm font-medium text-blue-600">ミュージシャン</label>
        <input type="text" id="musician" name="musician" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
      </div>

      <div>
        <label for="venue" class="block text-sm font-medium text-blue-600">ライブ会場</label>
        <input type="text" id="venue" name="venue" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500">
      </div>

      <div>
        <label for="text" class="block text-sm font-medium text-blue-600">ライブの感想</label>
        <textarea name="text" id="text" cols="30" rows="10" class="mt-1 p-2 w-full border-blue-300 border rounded-md focus:ring focus:ring-blue-200 focus:border-blue-500"></textarea>
        <p class="text-right text-blue-500 mt-2">（1000文字以内）</p>
      </div>

      <div class="text-right">
        <input type="submit" class="submit bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded-lg transition duration-200" value="記録する">
      </div>
    </form>
  </div>


</body>
