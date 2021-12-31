<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('/profile/show', [
            "users" => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
   
     */
    public function edit(User $user)
    {
        return view('profile/edit',[
            'post'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesej11_waktuRequest  $request
     * @param  \App\Models\sej11_waktu  $sej11_waktu
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
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
