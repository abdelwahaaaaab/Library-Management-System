<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\contact;

class MessagesController extends Controller
{
    public function index()
    {
        
        $user = Register::latest()->paginate(5);
        $contact = contact::latest()->paginate(5);
        return view('Admin.contact messages', compact('user', 'contact') );
    }
}
