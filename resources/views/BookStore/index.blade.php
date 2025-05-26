<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    
<div class=" w-full h-screen relative overflow-x-auto shadow-md sm:rounded-lg flex justify-center items-center">
    <table class="w-4/6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
            @foreach($BookStore as $BookStor)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $BookStor->isbn }}
                </th>
                <td class="px-6 py-4">
                    {{ $BookStor->name}}
                </td>
                <td class="px-6 py-4">
                   {{ $BookStor->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $BookStor->created_date}}
                </td>
               <td class="flex items-center px-6 py-4">
                    <a href="{{ route('edit', $BookStor->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="{{ route('destroy', $BookStor->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>