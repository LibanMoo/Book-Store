<?php

namespace App\Http\Controllers;

use App\Models\BookStore;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BookStore.index');
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
    public function store(Request $request)
    {
        //
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
    public function edit(BookStore $bookStore)
    {
        return view('BookStore.edit');
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
