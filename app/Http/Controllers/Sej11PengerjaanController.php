<?php

namespace App\Http\Controllers;

use App\Models\sej11_pengerjaan;
use App\Http\Requests\Storesej11_pengerjaanRequest;
use App\Http\Requests\Updatesej11_pengerjaanRequest;
use App\Models\Sej11_opsi_pilgan;
use App\Models\Sej11_soal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Sej11PengerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storesej11_pengerjaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store_soal1(Storesej11_pengerjaanRequest $request)
    {
        // $user=  User::;
        // dd($user);
        $check = $request->input('opsi_pg');
        $sepg = Sej11_opsi_pilgan::where('opsi_pg', $check)->get('status_benar');
        $sej11_soal = Sej11_opsi_pilgan::where('opsi_pg', $check)->value('sej11_soal_id');
      
       

   // dd($sej11_soal_id);
        $pengerjaan = new sej11_pengerjaan();
        $pengerjaan->sej11_user_level_id =  null;
        if ($sepg ===1) {
            $pengerjaan->status_pengerjaan  = 1;      
        } else {
            $pengerjaan->status_pengerjaan  = 0 ;
        }

        $pengerjaan->sej11_soal_id = $sej11_soal;

        $pengerjaan->save();

        // $yesorno=$request->status_pengerjaan

        //         $pengerjaan = new sej11_pengerjaan();
        //         $pengerjaan->sej11_user_level_id = $request->sej11_user_level_id;
        //         $pengerjaan->soal_id  = $request->soal_id ;
        //         $pengerjaan->status_pengerjaan  = $request->status_pengerjaan ;
        //         $pengerjaan->save();

        //  return $book;

        // $sej11_pengerjaan= new sej11_pengerjaan();
        // $sej11_pengerjan->opsi_pg=$user
        // $sej11_pengerjan->opsi_pg=$request->opsi_pg;

        // }

        // $validatedData = $request->validate([
        //     'name' => 'required|max:200',
        //     'username' => 'required|min:3|max:255|unique:users',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255'
        // ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // sej11_pengerjaan::create($validatedData);



        // return redirect('/login')->with('success', 'Registration successfuul !! please login');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesej11_pengerjaanRequest  $request
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesej11_pengerjaanRequest $request, sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sej11_pengerjaan  $sej11_pengerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(sej11_pengerjaan $sej11_pengerjaan)
    {
        //
    }
}
