<?php

namespace App\Http\Controllers;

use App\Models\AddBook;
use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function index()
    {
        return view('Admin.Add A Book');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'book_name' => 'required',
                'book_writer' => 'required',
                'book_type' => 'required',
                'book_lang' => 'required',
                'book_price' => 'required'
            ]
            );
        $book = AddBook::create($request->all());

        return redirect('/admin-home')->with('message', '* The Book Added Successfully *');    
    }

    public function edit($id)
    {
        $book = AddBook::find($id);
        return view('Admin.EditBook', compact('book')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'book_name' => 'required',
                'book_writer' => 'required',
                'book_type' => 'required',
                'book_lang' => 'required',
                'book_price' => 'required'
            ]
            );
        $book = AddBook::find($id);
        $book->book_name = $request->book_name;
        $book->book_writer = $request->book_writer;
        $book->book_type = $request->book_type;
        $book->book_lang = $request->book_lang;
        $book->book_price = $request->book_price;     
        $book->update();

        return redirect('/admin-home')->with('message', '* The Book Updated Successfully *');
    }

    public function destroy($book)
    {
        $book = AddBook::where('id', $book)->firstorfail()->delete();
        return redirect('/admin-home')->with('message', '* The Book Deleted Successfully *');
    }

     
}
