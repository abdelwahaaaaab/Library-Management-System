<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flag = 0;
        $users = Register::latest()->paginate(5);
        return view('Admin.Show Users' , compact('users', 'flag'));
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
        $flag = 0;
        $request->validate(
            ['search_user' => 'required']
        );
        $user = $request->search_user;
        $filteredusers = Register::where('name', 'like', '%'.$user.'%')
            ->orWhere('email','like', '%'.$user.'%')
                ->orWhere('Username','like', '%'. $user . '%')->get();
        if($filteredusers->count())
        {
            return view('Admin.Show Users', compact('flag'))->with(['users' => $filteredusers]);
        }
        else
        {
            $flag = 1;
            return view('Admin.Show Users', compact('flag'));
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
    public function destroy(Register $user)
    {
        //
    }
}
