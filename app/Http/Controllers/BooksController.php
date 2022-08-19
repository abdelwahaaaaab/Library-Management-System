<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddBook;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flag = 0;
        $books = AddBook::paginate(5);
        return view('Books', compact('books', 'flag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
           [ 'search_book' => 'required']
        );
        $flag = 0;
        $book = $request->search_book;
        $filteredbooks = AddBook::where('book_name', 'like', '%'. $book.'%')
            ->orWhere('book_writer', 'like', '%'. $book.'%')
                ->orWhere('book_type', 'like', '%'. $book.'%')
                    ->orWhere('book_lang', 'like', '%'. $book.'%')
                        ->orWhere('book_price', 'like', '%'. $book.'%')->get();
        if($filteredbooks->count())
        {
            return view('Books', compact('flag'))->with(['books' => $filteredbooks]);
        }
        else
        {
            $flag = 1;
            return view('Books', compact('flag'));
        }                
                        

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
    public function destroy(AddBook $book)
    {
        //
    }
}
