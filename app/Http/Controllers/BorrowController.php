<?php

namespace App\Http\Controllers;

use App\Models\borrow;
use App\Models\AddBook;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = AddBook::all();
        return view('Client.Borrow', compact('books'));
    }
    public function create()
    {
        return view('Client.Confirm_borrow');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'borrow_book' => 'required'
            ]
            );
        
        $borrow = borrow::create(array(
            'User_id' => session('user_id'),
            'borrow_book' => $_REQUEST['borrow_book']
        )); 
        
        return redirect('/borrow/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(borrow $borrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(borrow $borrow)
    {
        $borrow->delete();
        return redirect('/home')->with('message', '* The Operation is deleted Successfully * ');
    }
}
