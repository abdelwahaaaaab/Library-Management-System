<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Client.Home');
    }
    public function destroy(Register $id)
    {
        session()->invalidate();
        return redirect('/login')->with('message', '* You are Log out *');
    }

}
