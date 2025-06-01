<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookApiResource;
use App\Models\BookStore;
use Illuminate\Http\Request;

class BookController extends Controller
{
     public function index()
    {
        $books = BookStore::all();
        return BookApiResource::collection($books);
    }
}
