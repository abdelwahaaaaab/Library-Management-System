<?php

namespace App\Http\Controllers;

use App\Models\buy;
use App\Models\AddBook;
use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function index()
    {
        $book = AddBook::all();
        return view('Client.Buy', compact('book'));
    }

   
    public function create()
    {
        return view('Client.Confirm_buy');
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'buy_book' => 'required'
            ]
            );
        $buy = buy::create(array(
            'user_id' => session('user_id'),
            'buy_book' => $request->buy_book
        )
        );
        
        return redirect('/buy/create');
    }

    public function destroy( $buy )
    {
        $buy = buy::where('id', $buy)->firstorfail()->delete();
        return redirect('/home')->with('message', '* The Operation is deleted Successfully * ');
    }

}
