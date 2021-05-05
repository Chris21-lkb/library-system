<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

use function Symfony\Component\String\b;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bookname' => 'required',
            'author' => 'required',
            'publishdate' => 'required',
            'price' => 'required',
            'book_path' => 'required'
        ]);

        $book_path = $request -> file('book_path')->getClientOriginalName();

        $request -> file('book_path') -> storeAs('public/book/', $book_path );

        $book = new Book();

        $book -> BookName = $request -> bookname;
        $book -> author = $request -> author;
        $book -> publishDate = $request -> publishdate;
        $book -> book_path = $book_path;
        $book -> price = $request -> price;

        



        $book->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
