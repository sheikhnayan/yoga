<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;


class AuthController extends Controller
{
	public function registration(){
		return view('register');
	}

    public function register(Request $request){
        // 

    	if (Auth::guest()){
            // dd($request->all());
	    	$fields = $request->validate([
                'first' => 'required|string',
                'last' => 'required|string',
	    		'email' => 'required|string|unique:users,email',
	    		'password' => 'required|string',
	    		'referral' => 'required|string'
	    	]);

	    	$user = User::create([
                'first' => $fields['first'],
                'last' => $fields['last'],
                'email' => $fields['email'],
	    		'referral' => $fields['referral'],
	    		'password' => bcrypt($fields['password'])
	    	]);

	    	$token = $user->createToken('myapptoken')->plainTextToken;

	    	$response = [
	    		'user' => $user,
	    		'token' => $token
	    	];
            return view('login');
    	}else{
    		return redirect('login');
    	}
    	
    	//	DASHBOARD WILL BE HERE
    	// return response($response, 201);

    }
    public function login(){

    	return view('login');

    }


    public function loggedin(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //	CHECK EMAIL
        $user = User::where('email', $fields['email'])->first();

        // CHECK PASSWORD
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        //	TOKEN
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        //	DASHBOARD WILL BE HERE
        // return response($response, 201);
        return redirect('/');
    }


    public function logout(Request $request)
    {
    	
    	//	METHOD TO DELETE TOKEN
    	auth()->user()->tokens()->delete();

    	return [
    		'message' => 'Logged out'
    	];
    }
}