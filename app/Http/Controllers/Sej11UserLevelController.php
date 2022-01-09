<?php

namespace App\Http\Controllers;

use App\Models\sej11_user_level;
use App\Http\Requests\Storesej11_user_levelRequest;
use App\Http\Requests\Updatesej11_user_levelRequest;
use App\Models\Sej11_Level;
use App\Models\sej11_pengerjaan;

class Sej11UserLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function akhir_soal(Sej11_Level $sej11_level)
    {
    //     $last_id_sej_user_level=sej11_user_level::latest('created_at')->first()->id;
       
    //     $show_gambar = sej11_pengerjaan::where('sej11_user_level_id', '=', $last_id_sej_user_level)
    //     ->where('status_pengerjaan', '=', 1)
    //     ->join('sej11_soals', 'sej11_soals.id', '=', 'sej11_pengerjaans.sej11_soal_id')
    //     ->whereNotNull('sej11_soals.potongan_gambar')->get();
    //    // dd($show_gambar);
        
    //     return view('quiz/soal/akhir_soal', [
    //         'show_gambars' => $show_gambar,
    //         'sej11_level'=> $sej11_level,
    //         'sej11_user_level'=> sej11_user_level::where('id', $last_id_sej_user_level)->value('score')
    //     ]);

    }


    public function leaderboard_show(Sej11_Level $sej11_Level)
    {
        $sej11_user_level=sej11_user_level::where('sej11__level_id', $sej11_Level->id)
        ->orderByDesc('score')
       // ->where('sej11__level_id', $sej11_Level)
        ->get();

     
        return view('/leaderboard', [
            'sej11_user_level' => $sej11_user_level,
            'sej11_level'=>$sej11_Level
        ]);
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
     * @param  \App\Http\Requests\Storesej11_user_levelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesej11_user_levelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sej11_user_level  $sej11_user_level
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sej11_user_level  $sej11_user_level
     * @return \Illuminate\Http\Response
     */
    public function edit(sej11_user_level $sej11_user_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesej11_user_levelRequest  $request
     * @param  \App\Models\sej11_user_level  $sej11_user_level
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesej11_user_levelRequest $request, sej11_user_level $sej11_user_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sej11_user_level  $sej11_user_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(sej11_user_level $sej11_user_level)
    {
        //
    }
}
