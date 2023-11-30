<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getLogin(){
        $page_content =[
            'page_title'      => __('Login'),
            'module_name'     => __('Login'),
            'sub_module_name' => __('Login'),
            'module_route'    => route('login'),
            'button_type'    => 'login'
        
        ];

        return view('auth.login', compact('page_content'));
    }



    public function login(LoginRequest $request)
    
    {
        $user = (new User())->findUserByEmailOrPhone($request->input('email'));


        if($user && Hash::check($request->input('password'), $user->password)){
            Auth::login($user);
            $class = 'success';
            $message = 'Login Successful';
            Log::info('User logged in successfully', ['user_id' => $user->id]);
            return redirect()->route('dashboard')->with('class',$class)->with('message',$message);
        }
      
        
        Log::error('Invalid login credentials', ['email' => $request->input('email')]);
        $class = 'danger';
        $message = 'Invalid login credentials';

        return redirect()->route('login')->with('class',$class)->with('message',$message);
    }
   
    



    public function logout()
    {
        Auth::logout();
        $class = 'success';
        $message = 'Logout Successful';
        return redirect()->route('login')->with('class',$class)->with('message',$message);
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
