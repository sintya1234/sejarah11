<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'school'=>'required|string',
            'city'=>'required|string',
            'birthyear'=>'required|string',
        ]);

        $user = $this->newUser($request->all());
    
        if(empty($user)){
            return response([
                'massage'=>'Failed to create account'
            ]);    
        }else{
            return response([
                'massage'=>'Account created' 
            ]);
        }
    }

        private function newUser(array $data){
            return User::create([
                'name' =>$data['name'],
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'school'=>$data['school'],
                'city'=>$data['city'],
                'birthyear'=>$data['birthyear'],
                'role' => 'admin',
                'created_at'=>\Carbon\Carbon::now(),
                'email_verified_at'=> \Carbon\Carbon::now()
            ]);
        }
        public function index(){
            return view('register.index', [
                'title'=>'Register'
            ]);
        }
    }

