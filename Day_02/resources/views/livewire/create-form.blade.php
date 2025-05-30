<div class="container relative bg-slate-300 p-10 w-full h-screen flex items-center justify-center">
<form wire:submit.prevent="saveCreateForm" method="POST" class="w-3/6 flex flex-col justify-center items-center"> 
    <h2 class="text-blue-500 text-xl font-medium">Register New Book</h2>
    <div class="w-full">
  <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
  <input type="number" name="isbn" id="isbn" wire:model.live="isbn" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ISBN">
  @error('isbn') <span class="error">{{ $message }} </span> @enderror
  </div>
    <div class="w-full">
  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book Name</label>
  <input type="text" name="name" id="name" wire:model.live="name" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name">
    @error('name') <span class="error">{{ $message }} </span> @enderror
   <div class="mt-4 p-4 border rounded bg-gray-100">
        <h2 class="text-xl font-bold">Live Preview:</h2>
        <p class="text-2xl italic text-blue-700">{{ $name }}</p>
    </div>
  </div>
    <div class="w-full">
  <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author Name</label>
  <input type="text" name="author" id="author" wire:model.live="author" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Author">
    @error('author') <span class="error">{{ $message }} </span> @enderror
  </div>
  <div class="w-full">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
  <textarea id="description" name="description" wire:model.live="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></textarea>
    @error('description') <span class="error">{{ $message }} </span> @enderror

  </div>
   <div wire:loading wire:target='saveCreateForm' class=' flex items-center justify-center' >
  <div class='w-13 h-13 border-4 border-gray-300 border-t-4 border-t-blue-400 rounded-full animate-spin'>
</div>
  </div>
  <button type="submit" wire:click="saveCreateForm" class=" mt-2 text-white bg-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm w-[20%] py-2.5 text-center me-2 mb-2">Register</button>
</form>
</div>