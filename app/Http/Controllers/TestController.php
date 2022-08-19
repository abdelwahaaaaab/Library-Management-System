<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddBook;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = AddBook::paginate(5);
        return response()->json($test);
    }
}
