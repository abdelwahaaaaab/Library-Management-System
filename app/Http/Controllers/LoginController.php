<?php

namespace App\Http\Controllers;
use App\models\Register;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('Login');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required|min:6'
            ]
            );
     
            $username = $request->username;
            $passwd = $request->password;
            $login = Register::where(['username' => $username])->first();
            if($request->username == 'admin1234' && $request->password == '123456' && $login != NULL && $passwd == decrypt($login->Password))
            {
                $request->session()->put(
                    [
                        'ALoggedIn' => true,
                        'LoggedIn' => true,
                        'user_id' => $login->id 
                    ]
    
                    );
                return redirect('/admin-home')->with('message', '* Welcome To Home Page *');
            }
            elseif($login != NULL && $passwd == decrypt($login->Password) )
            {
                $request->session()->put
                (
                    [
                        'CLoggedIn' => true,
                        'LoggedIn' => true,
                        'user_id' => $login->id
                    ]
                );
                return redirect('/home')->with('message', '* Welcome To Home Page *');   

            }
            else
            {
                return redirect()->back()->with('alert', '* Username or Password is Incorrect *')->withInput();
            }
    }

    public function destroy(Register $id)
    {
        session()->invalidate();
        return redirect('/login')->with('message', '* You are Log out *');
    }
}
