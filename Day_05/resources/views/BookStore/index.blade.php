<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=check" />
     @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    
<div class=" w-full bg-slate-300 p-10 h-screen relative overflow-x-auto shadow-md sm:rounded-lg flex flex-col justify-center items-center">
    <table class="w-4/6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
@if (session('success'))
 <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
 <span class="material-symbols-outlined">
check
</span>
  <div>
  {{ session('success') }}
  </div>
  @endif
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3">
                    NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($BookStore as $bookstore)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $bookstore->isbn }}
                </th>
                <td class="px-6 py-4">
                    {{ $bookstore->name}}
                </td>
                <td class="px-6 py-4">
                   {{ $bookstore->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $bookstore->created_date}}
                </td>
               <td class="flex items-center px-6 py-4">
                    <a href="{{ route('bookstore.edit', $bookstore->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('bookstore.destroy', $bookstore->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3 cursor-pointer">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>