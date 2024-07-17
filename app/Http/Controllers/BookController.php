<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                //fecth all data from user table with book table data (after joining)
        //  $users= User::with('book')->get();
                //with specific id
        //  $users = User::with('book')->find('9c87069f-b385-4a1c-8074-bfc894726145')

                //user which have no book
        // $users = User::doesntHave("book")->get();

                //which user have atleast one book
        // $users= User::has('book')->with('book')->get();

        //with book count

        // $users = User::withCount('book')->get();

        //  return $users;

        //reverse relationship

        // $books = Book::with('user')->get();
        // return $books;

        // $book = Book::withWhereHas('user',function($query){
        //     $query->where("name","Hillard Strosin")
        //         ->orWhere("name","Selena Beahan");
        // })->get();
        // return $book;

        $user = User::where("name","Asia Hamill")->get();
        $book = Book::whereBelongsTo($user)->get();
        return $book;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
