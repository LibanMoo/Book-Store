<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookStore = BookStore::paginate(10);

        return view('BookStore.index', [
            'BookStore'=> $bookStore
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BookStore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
         $validated = $request->validated();

          BookStore::create($validated);

          return redirect()->route('index')->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookStore $bookStore)
    {
        return view('BookStore.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookStore $bookstore)
    {
        return view('BookStore.edit', compact('bookstore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookStore $bookStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookStore $bookStore)
    {
        //
    }
}
