<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\borrow;
use App\Models\Register;
use App\Models\AddBook;
class BorrowListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Register::latest()->paginate(5);
        $borrow = borrow::latest()->paginate(5);
        $book = AddBook::latest()->paginate(5);
        return view('Admin.Borrowed Books', compact('borrow', 'user', 'book'));
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
        /*
        $flag = 0;
        $request->validate(
            ['search_borrow' => 'required']
        );
        $borrow1 = $request->search_borrow;
        $filteredborrows = Register::where('Username', 'like', '%'. $borrow1 . '%')->get();
        $filteredborrows1 =AddBook::Where('book_name', 'like', '%' .$borrow1 . '%')
                ->orWhere('book_writer', 'like', '%' .$borrow1 . '%')
                    ->orWhere('book_type', 'like', '%' .$borrow1 . '%')
                        ->orWhere('book_lang', 'like', '%' .$borrow1 . '%')
                            ->orWhere('book_price', 'like', '%' .$borrow1 . '%')->get();
        if($filteredborrows1->count())
        {
            $borrow = borrow::all();
            $user = Register::all();
            return view('Admin.Borrowed Books', compact('flag', 'borrow','user'))->with(['book' => $filteredborrows1]);
        }
        elseif($filteredborrows->count())
        {
            $borrow = borrow::all();
            $book = AddBook::all();
            return view('Admin.Borrowed Books', compact('flag', 'borrow','book'))->with(['user' => $filteredborrows]);

        }
        else
        {
            $flag = 1;
            return view('Admin.Borrowed Books', compact('flag'));
        }
        */                    
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
    public function destroy( $borrow)
    {
        $borrow = borrow::where('id', $borrow)->firstorfail()->delete();
        return redirect('/admin-home')->with('message', '* The Operation is deleted Successfully * ');
    }
}
