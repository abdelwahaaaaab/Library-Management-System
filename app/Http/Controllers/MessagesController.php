<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\contact;

class MessagesController extends Controller
{
    public function index()
    {
        $user = Register::all();
        $contact = contact::all();
        return view('Admin.contact messages', compact('user', 'contact') );
    } 
}
