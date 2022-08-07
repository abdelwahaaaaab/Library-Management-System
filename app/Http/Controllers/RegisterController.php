<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
        $request->validate
        (
            [
                'name' => 'required|max:50',
                'email' => 'required|email|unique:registers',
                'Username' => 'required|unique:registers|max:50',
                'Password' => 'required|confirmed|min:6',
                'Password_confirmation' => 'required'
            ]
        );

            $Password = $request->Password;
            $confirm = $request->Password_confirmation;
            $user = Register::create(array(
                'name' => $_REQUEST['name'],
                'email'=> $_REQUEST['email'],
                'Username' => $_REQUEST['Username'],
                'Password' => encrypt($Password),
                'Password_confirmation' => encrypt($confirm)

            ));
            if($request->name == 'admin' && $request->Username == 'admin1234' &&$Password == '123456')
            {
                $request->session()->put(
                    [
                        'ALoggedIn' => true,
                        'LoggedIn' => true, 
                        'RLoggedIn' => true,
                        'user_id' => $user->id
                    ]
    
                    );
                return redirect('/admin-home')->with('message', '* Welcome To Home Page *');
            }
            else
            {
                $request->session()->put(
                    [
                        'LoggedIn' => true,
                        'RLoggedIn' => true,
                        'CLoggedIn' => true,
                        'user_id' => $user->id
                    ]
                    );
                return redirect('/home')->with('message', '* Welcome to Our Website *');     
            }

            
    }

    public function destroy($user)
    {
        $user = Register::where('id', $user)->firstorfail()->delete();
        return redirect('/admin-home')->with('message', '* The User Deleted Successfully * ');
    }
}
