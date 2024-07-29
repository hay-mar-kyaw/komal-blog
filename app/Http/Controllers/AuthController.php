<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
                        'name'=>'required|max:255|min:3',
                        'username'=>'required|unique:users,username',
                        'email'=>'required|email|unique:users,email',
                        'password'=>'required|min:8|max:255'

                            ]);
        $user = User::create($formData);
        auth()->login($user);
        // session()->flash('success','Welcome Dear'.$user->username);
        return redirect('/')->with('success','Welcome Dear '.$user->username);
    }

    public function logout(){
        auth()->logout();
        return redirect('/')->with('success','Good luck!');
    }

    public function login(){
        return view('auth.login');
    }

    public function post_login(){

        //validation
        $formData=request()->validate([
            'email'=>['required','max:255',Rule::exists('users','email')],
            'password'=>['required','min:8','max:255']
        ],[
            'email.required'=>'Please enter your email',
            'password.min'=>'Password must be 8 character'
        ]);

        //auth attempt
        if(auth()->attempt($formData)){
            return redirect('/')->with('success','Welcome Back!!');
        }else{
            return back()->withErrors([
                'email'=>'User Creditical Wrong'
            ]);
        }
    }

}
