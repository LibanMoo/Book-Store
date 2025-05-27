<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="container bg-slate-300 p-10 w-full h-screen flex items-center justify-center">
<form action="{{ route('bookstore.store') }}" method="POST" class="w-3/6 flex flex-col justify-center items-center"> 
    @csrf
    <h2 class="text-blue-500 text-xl font-medium">Register New Book</h2>
    <div class="w-full">
  <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
  <input type="isbn" name="isbn" id="isbn" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ISBN">
  @error('isbn') {{ $message }} @enderror
  </div>
    <div class="w-full">
  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book Name</label>
  <input type="text" name="name" id="name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name">
  </div>
    <div class="w-full">
  <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
  <input type="text" name="author" id="author" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Author">
  </div>
  <div class="w-full">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
  <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>

  </div>
  <button type="submit" class=" mt-2 text-white bg-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm w-[20%] py-2.5 text-center me-2 mb-2">Register</button>
</form>
</div>
</body>
</html>
