<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
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
    
     */
    public function store()
    {
        //
      
    }

    /**
     * Display the specified resource.
     *
    
     */
    public function show(User $users)
    {
        //   
    }

    /**
     * Show the form for editing the specified resource.
     *
   
     */
    public function edit(User $user)
    {
        return view('profile/edit', [
            'post' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesej11_waktuRequest  $request
     * @param  \App\Models\sej11_waktu  $sej11_waktu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       // return $request->file('photo')->store('post-photos');
     $validatedDate = $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'username' => 'required|min:3|max:255',
             'password' => 'required|string',
             'school' => 'required|string',
             'city' => 'required|string',
             'birthyear' => 'required|string',
             'photo' => 'required|file|max:5120'
         ]);
         if($request->file('photo')){
            $validatedDate['photo'] =  $request->file('photo')->store('post-photos');
         }
    
       //  User::create($validatedDate);
        User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'school' => $request->school,
                'city' => $request->city,
                'birthyear' => $request->birthyear,
                'password' =>  $request->password,
                'photo' =>  $validatedDate
            ]);

        return redirect('/profile')->with('status', 'Data telah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sej11_waktu  $sej11_waktu
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
