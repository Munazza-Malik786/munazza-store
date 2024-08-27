<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;

use App\Models\User;

class UserController extends Controller
{


    // function user(){

    //     $users=User::all();
    //     return view('user', compact('users'));
    // }
    public function loginpage()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $User = User::all();
//         dd($User);
        $User->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('admin');
        }
        return back()->withErrors([
            'email' => 'something went wrong please enter valid information'
        ]);
         $users=User::all();
         return view('/login', compact('users'));

    }

    public function registerpage()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $useRegister = Catagory::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);
//        dd($request->image);
//        if ($useRegister) {
//            return redirect(url('/user.login.page'));
//        }
    }

    public function reset()
    {
        return view('passwords.reset');
    }
}
